const app = new Vue({
  el: "#app",
  data: {
    show: false,
    topics: [
      {
        "id": 1,
        "title": "topic 1",
        "sub": [
          {
            "title": "subtopic 1.1",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 1.2",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 1.3",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 1.4",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 1.5",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 1.6",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
        ],
      },
      {
        "id": 2,
        "title": "topic 2",
        "sub": [
          {
            "title": "subtopic 2.1",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 2.2",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 2.3",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
        ],
      },
      {
        "id": 3,
        "title": "topic 3",
        "sub": [
          {
            "title": "subtopic 3.1",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 3.2",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 3.3",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 3.4",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
          {
            "title": "subtopic 3.5",
            "body": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a aut?"
          },
        ],
      },
    ],
  },
  methods: {
    isEven: function (id) {
      this.id = id;
      if (this.id % 2 !== 0) {
        return false;
      }
      return true;
    },
    isOdd: function (id) {
      this.id = id;
      if (this.id % 2 !== 1) {
        return false;
      }
      return true;
    }
  },
});

