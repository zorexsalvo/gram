<template>
  <div>
    <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
  </div>
</template>

<script>
export default {
  props: ["userId", "follows"],
  mounted() {
    console.log("Component mounted.");
  },

  data: function() {
    return {
      status: this.follows
    };
  },

  computed: {
    buttonText() {
      return this.status ? "Unfollow" : "Follow";
    }
  },

  methods: {
    followUser() {
      axios.post("/follow/" + this.userId).then(response => {
        if (response.data.attached.includes(parseInt(this.userId))) {
          this.status = true;
        } else {
          this.status = false;
        }
      });
    }
  }
};
</script>
