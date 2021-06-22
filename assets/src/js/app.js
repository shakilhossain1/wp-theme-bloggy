export default () => ({
  searchOpen: false,
  navOpen: false,

  openSearch() {
    this.searchOpen = true;
  },
  closeSearch() {
    this.searchOpen = false;
  },
  openNav() {
    this.navOpen = true;
  },
  closeNav() {
    this.navOpen = false;
  }
});
