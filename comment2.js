"use strict";

const API_URL = "api/comentarios/productos/";
const API_COMMENTS_URL = "api/comentarios/";

const appComments = new Vue({
  el: '#comments',
  data: {
    comments: [],
    empty: null,
    status: null,
    message: "",
    order: "no",
    scoreFilter: "no",
    sortBy: "puntuacion",
    notFound: "",
  },
  methods: {
    async getComments() {
      this.empty = null;
      try {
        const response = await fetch(API_URL + this.id_producto);
        const resComments = await response.json();
        if (response.ok) {
          this.comments = resComments;
        } else {
          this.empty = "No hay comentarios aún. ¡Comenta!";
        }
      } catch (e) {
        console.error(e);
      }
    },
    async insertComment(e) {
      e.preventDefault();
      const inputComment = new FormData(commentForm);
      const newComment = {
        id_producto: this.id_producto,
        id_usuario: this.id_usuario,
        comentario: inputComment.get('comentario'),
        puntuacion: inputComment.get('puntuacion')
      };

      try {
        const response = await fetch(API_URL + this.id_producto, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(newComment)
        });
        if (response.ok) {
          this.empty = null;
          const comment = await response.json();
          this.comments.push(comment);
        } else {
          console.error(response.status);
        }
        this.showStatus(response.status, "ins");
      } catch (error) {
        console.error(error);
      }
    },
    async deleteComment(comment_id) {
      try {
        const response = await fetch(API_COMMENTS_URL + comment_id, {
          method: "DELETE",
          headers: {
            "Content-Type": "application/json",
          },
        });

        if (response.ok) {
          this.comments = this.comments.filter(comment => comment.id !== comment_id);
        } else {
          console.error(response.status);
        }
        this.showStatus(response.status, "del");
        this.checkEmptyComments();
      } catch (error) {
        console.error(error);
      }
    },
    async getCommentSorted(order) {
      this.notFound = "";
      const sortBy = document.querySelector("#sortBy-select").value;
      let URL = `${API_URL}${this.id_producto}?sort=${sortBy}&order=${order}`;
      if (this.scoreFilter === 'yes') {
        const filterBy = document.querySelector("#filterBy-select").value;
        URL += `&score=${filterBy}`;
      }
      try {
        const response = await fetch(URL);
        const resComments = await response.json();

        if (response.ok) {
          this.comments = resComments;
        } else if (response.status === 404) {
          this.notFound = "No hay comentarios que coincidan con la búsqueda";
        } else {
          console.error(response.status);
        }
      } catch (e) {
        console.error(e);
      }
    },
    async getCommentsFiltered() {
      this.notFound = "";
      const filterBy = document.querySelector("#filterBy-select").value;
      const URL = `${API_URL}${this.id_producto}?score=${filterBy}`;
      try {
        const response = await fetch(URL);
        const resComments = await response.json();

        if (response.ok) {
          this.comments = resComments;
        } else if (response.status === 404) {
          this.notFound = "No hay comentarios que coincidan con la búsqueda";
        } else {
          console.error(response.status);
        }
      } catch (e) {
        console.error(e);
      }
    },
    checkEmptyComments() {
      this.empty = this.comments.length === 0 ? "No hay comentarios aún. ¡Comenta!" : null;
    },
    showStatus(code, method = "") {
      let verb = "";
      this.status = false;

      switch (method) {
        case "del":
          verb = "eliminado";
          break;
        case "ins":
          verb = "agregado";
          break;
        default:
          verb = "??";
          break;
      }

      switch (code) {
        case 403:
          this.message = "Error: no tienes los permisos para realizar esta acción";
          break;
        case 200:
          this.message = `Su comentario fue ${verb} con éxito`;
          this.status = true;
          break;
        default:
          this.message = "Error";
          break;
      }

      setTimeout(() => {
        this.message = "";
        this.status = null;
      }, 2000);
    }
  },
  mounted() {
    this.getComments();
  }
});

const userInfo_div = document.querySelector("#user-info-div");
appComments.id_producto = userInfo_div.getAttribute('id-producto');
appComments.id_usuario = userInfo_div.getAttribute('id-usuario');

const commentForm = document.querySelector("#post-comment-f");
commentForm.addEventListener('submit', appComments.insertComment);
