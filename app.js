
const app = new Vue({
  el: "#app",
  data: {
    maximum: 2,
    show: false,
    topics: [
      {
        "id": 1,
        "title": "topic 1",
        "sub": "subtopic 1",
        "body":
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?",
      },
      {
        "id": 2,
        "title": "topic 2",
        "sub": "subtopic 2",
        "body":
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?",
      },
      {
        "id": 3,
        "title": "topic 3",
        "sub": "subtopic 3",
        "body":
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?",
      },
    ],
  },
  methods: {
    showItem: function (show) {

      if (show == true) {
        this.maximum = 3
        console.log(this.maximum);
      }
    }
  },
});

