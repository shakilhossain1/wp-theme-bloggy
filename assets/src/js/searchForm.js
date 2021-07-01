// import watch from "alpinejs"
export default () => ({
  search: '',
  posts: [],
  typingTimer: null,
  previousValue: '',
  isLoading: false,

  init() {
    console.log();
  },

  get isPostAvailable() {
    return this.posts.length > 0;
  },

  handleSearch() {
    if (this.previousValue != this.search) {
      clearTimeout(this.typingTimer);

      if (this.search) {
        this.typingTimer = setTimeout(this.getPosts.bind(this), 1000);
      } else {
        this.posts = [];
      }
    }
    this.previousValue = this.search;
  },

  async getPosts() {
    console.log(this);
    const posts = await fetch(
      `http://localhost/blog/wp-json/bloggy/v1/search?term=${this.search}`
    ).then(res => res.json());

    this.posts = posts;
  },
});
