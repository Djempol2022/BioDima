<script>
  $(document).ready(function() {
    // Handle button click to start the countdown
    $('#btn_transaksi').on('click', function(e) {
      e.preventDefault();
      $('#btn_transaksi').attr('disabled', true);
      startCountdown(5); // Set duration to 5 minutes
    });

    const countdownEl = document.getElementById('countdown');
    const startBtn = document.getElementById('btn_transaksi');
    let countdownIntervalId;
    let countdownTime = localStorage.getItem('countdownTime');
    let endTime; // Declare endTime here

    // Function to start the countdown
    function startCountdown(durationInMinutes) {
      if (isNaN(durationInMinutes) || durationInMinutes <= 0) {
        console.log('Invalid duration: ' + durationInMinutes);
        return;
      }
      const durationInSeconds = durationInMinutes * 60;
      endTime = parseInt(localStorage.getItem('countdownTime')) + (durationInSeconds *
        1000); // Assign value to endTime
      localStorage.setItem('countdownTime', endTime);

      countdownIntervalId = setInterval(function() {
        let remainingTime = Math.floor((endTime - Date.now()) / 1000);
        const minutes = Math.floor(remainingTime / 60);
        let seconds = remainingTime % 60;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        countdownEl.textContent = `${minutes}:${seconds}`;

        if (remainingTime <= 0) {
          clearInterval(countdownIntervalId);
          countdownEl.textContent = '00:00';
          localStorage.removeItem('countdownTime');
        }
      }, 1000);
    }

    // Check if there is a countdown in progress
    if (countdownTime) {
      const endTime = parseInt(countdownTime);
      const remainingTime = Math.floor((endTime - Date.now()) / 1000);
      const minutes = Math.floor(remainingTime / 60);
      const seconds = remainingTime % 60;
      countdownEl.textContent = `${minutes}:${seconds}`;
    }

    // Save countdown time to local storage when the window is closed
    window.addEventListener('beforeunload', function() {
      const remainingTime = parseInt((endTime - Date.now()) / 1000);
      localStorage.setItem('countdownTime', Date.now() + (remainingTime * 1000));
    });
  });
</script>
