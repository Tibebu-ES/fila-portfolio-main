import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/App/**/*.php',
        './resources/views/filament/app/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    extend : {
        colors : {
            primary: '#1c1c22',
            accent: {
                DEFAULT: '#00ff99',
                hover: '#00e187'
            }
        }

    }
}
