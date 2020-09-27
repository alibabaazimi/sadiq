<template>
  <div>
    {{blogcontent.content}}
  </div>
</template>

<script>
 
import axios from "axios";
const ax = axios.create({
  baseURL: 'https://sadiq.dev'
});

export default {
  name: "BloePage",
  data() {
    return {
      blogcontent: { content: "Loading..." },
    };
  },
  mounted() {

    let url = "/test.json";
    ax.get(url)
      .then((response) => {
        this.blogcontent = response.data;
        console.log(response);
      })
    //   .catch((err) => {
    //     console.log(err);
    //   });
  }
};
</script>
