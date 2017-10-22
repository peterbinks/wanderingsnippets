/* ---------------------------------------
    CONFIG
   --------------------------------------- */

// Project paths
var src     = './source/';
var vendor  = './source/vendor/';
var dist    = './public/';

module.exports = {
  deploy: {
    source: 'public/',
    user: 's202202.gridserver.com',
    host: 's202202.gridserver.com',
    dest: 'domains/wanderingsnippets.com/html',
    exclude_list: 'rsync-exclude.txt'
  },

  files: {
    source: src+'*.{html,php}',
    dest: dist,
  },

  site: {
    source: src+'/site/**/*.*',
    dest: dist+'/site/',
  },

  content: {
    source: src+'/content/**/*.*',
    dest: dist+'/content/',
  },

  styles: {
    source: src+'styles/**/*.scss',
    dest: dist+'assets/styles/',
    autoprefixer: {
      browsers: ['> 5%', 'last 2 versions'],
      cascade: false
    }
  },

  jshint: {
    source: src+'scripts/**/*.js'
  },

  javascript: {
    name: 'main',
    source: src+'scripts/**/*.js',
    dest: dist+'assets/scripts/'
  },

  images: {
    source: src+'images/**/*',
    dest: dist+'assets/images/'
  },

  modernizr: {
    parameters: {
      options: ['setClasses','html5printshiv','fnBind']
    },
    source: dist+'assets/styles/*.css',
    dest: vendor
  },

  server: {
    base: dist,
    port: 8000,
    host: 'localhost',
    open: true,
    livereload: false,
  },

  clean: {
    all: [
      './.sass-cache',
      dist+'assets/images/*',
      dist+'assets/scripts/*',
      dist+'assets/styles/*',
    ]
  },

  kirby: {
    core: {
      url: 'https://github.com/getkirby/kirby/archive/master.zip',
      path: dist + 'kirby'
    },

    panel: {
      url: 'https://github.com/getkirby/panel/archive/master.zip',
      path: dist + 'panel'
    }
  },

  watch: {
    files: src+'*.{html,php}',
    site: src+'/site/**/*.*',
    content: src+'/content/**/*.*',
    styles: src + 'styles/**/*.scss',
    javascript: src + 'scripts/**/*.js',
    images: src+'images/**/*.*',
  }
};
