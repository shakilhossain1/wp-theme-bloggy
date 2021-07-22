// import watch from "alpinejs"
export default () => ({
  search: '',
  posts: [],
  typingTimer: null,
  previousValue: '',
  isLoading: false,

  init() {
    this.$watch('search', () => {
      this.handleSearch();
    });
  },

  get isPostAvailable() {
    return this.posts.length > 0;
  },

  handleSearch() {
    this.isLoading = false;
    if (this.previousValue != this.search) {
      clearTimeout(this.typingTimer);

      if (this.search) {
        this.isLoading = true;
        this.typingTimer = setTimeout(this.getPosts.bind(this), 1000);
      } else {
        this.posts = [];
      }
    }
    this.previousValue = this.search;
  },

  async getPosts() {
    const posts = await fetch(
      `http://localhost/blog/wp-json/bloggy/v1/search?term=${this.search}`
    ).then(res => res.json());
    this.isLoading = false;
    this.posts = posts;
  },
});
