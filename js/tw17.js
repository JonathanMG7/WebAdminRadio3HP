var tw = new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '@Sergio_villave',
  interval: 30000,
  title: '@Sergio_villave',
  subject: '',
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#8ec1da',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().start();
  

