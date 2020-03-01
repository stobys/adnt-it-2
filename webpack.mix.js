const mix = require('laravel-mix');

// -- Mix Asset Management

//mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

// mix.copyDirectory('node_modules/font-awesome/fonts', 'public/assets/fonts');
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/assets/webfonts'),
mix.copyDirectory('node_modules/flag-icon-css/flags', 'public/assets/flags'),
mix.copyDirectory('node_modules/admin-lte/dist/img', 'public/img');

// -- admin-lte
mix.styles([
		'node_modules/bootstrap/dist/css/bootstrap.min.css',
		// 'node_modules/font-awesome/css/font-awesome.min.css',
		'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
		'node_modules/flag-icon-css/css/flag-icon.min.css',
		// 'node_modules/admin-lte/dist/css/skins/_all-skins.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-black.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-black-light.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-blue.min.css',
		'node_modules/admin-lte/dist/css/skins/skin-blue-light.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-green.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-green-light.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-purple.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-purple-light.min.css',
		'node_modules/admin-lte/dist/css/skins/skin-red.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-red-light.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-yellow.min.css',
		// 'node_modules/admin-lte/dist/css/skins/skin-yellow-light.min.css',

		// 'node_modules/bootstrap-toggle/css/bootstrap-toggle.min.css',
		// 'node_modules/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',

		// 'node_modules/select2/dist/css/select2.min.css',
		'node_modules/admin-lte/dist/css/AdminLTE.min.css',

		'resources/assets/css/styles.css'
	], 'public/assets/css/combined.css'
);

mix.scripts([
		'node_modules/jquery/dist/jquery.min.js',
		'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
		// 'node_modules/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
		'node_modules/admin-lte/dist/js/adminlte.min.js',
		'node_modules/admin-lte/dist/js/demo.js',

		// -- Bootstrap Date Picker
		// 'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
		// 'node_modules/bootstrap-datepicker/dist/js/locales/bootstrap-datepicker.pl.min.js',
		// 'node_modules/bootstrap-datepicker/dist/js/locales/bootstrap-datepicker.en.min.js',

		// -- Bootstrap Switch / Toggle
		// 'node_modules/bootstrap-toggle/js/bootstrap-toggle.min.js',
		// 'node_modules/bootstrap-switch/dist/js/bootstrap-switch.min.js',

		// 'node_modules/bootstrap-toggle/dist/js/bootstrap-toggle.min.css',
		// 'node_modules/bootstrap-toggle/dist/js/bootstrap-switch.min.js',

		// -- Select2
		// 'node_modules/select2/dist/js/select2.min.js',
		// 'node_modules/select2/dist/js/i18n/en.js',
		// 'node_modules/select2/dist/js/i18n/pl.js',

		'resources/assets/js/prototypes.js',
		'resources/assets/js/callback.js',
		'resources/assets/js/scripts.js',
		'resources/assets/js/onload.js',

		'resources/assets/js/myapp.js'
	], 'public/assets/js/combined.js')

mix.scripts([
		'node_modules/jquery/dist/jquery.min.js',
		'node_modules/bootstrap/dist/js/bootstrap.min.js',
		'node_modules/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',

		'resources/assets/js/prototypes.js',
		'resources/assets/js/callback.js',
		'resources/assets/js/scripts.js',
		'resources/assets/js/onload.js',
	], 'public/assets/js/login.js')

