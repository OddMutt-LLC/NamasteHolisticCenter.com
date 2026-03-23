document.addEventListener("DOMContentLoaded", function () {

    const iframe = document.getElementById('vimeo-player');
    const player = new Vimeo.Player(iframe);

    const playBtn = document.getElementById('playPause');
    const muteBtn = document.getElementById('muteToggle');

    let isPaused = false;

    // Play / Pause
    playBtn.addEventListener('click', async () => {
        if (isPaused) {
            await player.play();
            playBtn.innerHTML = '<i class="bi-pause-fill"></i>';
        } else {
            await player.pause();
            playBtn.innerHTML = '<i class="bi-play-fill"></i>';
        }
        isPaused = !isPaused;
    });

    // Mute / Unmute
    muteBtn.addEventListener('click', async () => {
        const volume = await player.getVolume();

        if (volume === 0) {
            await player.setVolume(1);
            muteBtn.innerHTML = '<i class="bi-volume-up-fill"></i>';
        } else {
            await player.setVolume(0);
            muteBtn.innerHTML = '<i class="bi-volume-mute-fill"></i>';
        }
    });

});
