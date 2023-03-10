<script>
  const startButton = document.getElementById('lanjut_transaksi');
  const countdownElement = document.getElementById('countdown');

  let startTime;
  let endTime;
  let countdownInterval;

  // Check if there is a countdown in progress
  if (localStorage.getItem('endTime')) {
    $('#bg-pembayaran').removeClass('d-none')
    startTime = new Date().getTime();
    endTime = parseInt(localStorage.getItem('endTime'));
    let timeLeft = endTime - startTime;

    countdownInterval = setInterval(function() {
      let currentTime = new Date().getTime();
      timeLeft = endTime - currentTime;

      let secondsLeft = Math.floor(timeLeft / 1000);
      let minutesLeft = Math.floor(secondsLeft / 60);

      let secondsString = (secondsLeft % 60).toString().padStart(2, '0');
      let minutesString = minutesLeft.toString().padStart(2, '0');

      let timeString = `${minutesString}:${secondsString}`;

      countdownElement.textContent = timeString;

      if (timeLeft < 0) {
        clearInterval(countdownInterval);
        countdownElement.textContent = 'Waktu Habis';
        localStorage.removeItem('endTime');
      }
    }, 1000);
  }

  startButton.addEventListener('click', function() {
    startTime = new Date().getTime();
    endTime = startTime + 420000;

    localStorage.setItem('endTime', endTime);

    countdownInterval = setInterval(function() {
      let currentTime = new Date().getTime();
      let timeLeft = endTime - currentTime;

      let secondsLeft = Math.floor(timeLeft / 1000);
      let minutesLeft = Math.floor(secondsLeft / 60);

      let secondsString = (secondsLeft % 60).toString().padStart(2, '0');
      let minutesString = minutesLeft.toString().padStart(2, '0');

      let timeString = `${minutesString}:${secondsString}`;

      countdownElement.textContent = timeString;

      if (timeLeft < 0) {
        clearInterval(countdownInterval);
        countdownElement.textContent = 'Waktu Habis';
        localStorage.removeItem('endTime');
      }
    }, 1000);
  });

  // Save the remaining time when the user leaves the page
  window.addEventListener('beforeunload', function() {
    if (endTime) {
      let currentTime = new Date().getTime();
      let remainingTime = endTime - currentTime;
      localStorage.setItem('remainingTime', remainingTime);
    }
  });

  // Restore the countdown when the user comes back to the page
  window.addEventListener('load', function() {
    if (localStorage.getItem('remainingTime')) {
      let remainingTime = parseInt(localStorage.getItem('remainingTime'));
      startTime = new Date().getTime();
      endTime = startTime + remainingTime;

      localStorage.setItem('endTime', endTime);
      localStorage.removeItem('remainingTime');

      countdownInterval = setInterval(function() {
        let currentTime = new Date().getTime();
        let timeLeft = endTime - currentTime;

        let secondsLeft = Math.floor(timeLeft / 1000);
        let minutesLeft = Math.floor(secondsLeft / 60);

        let secondsString = (secondsLeft % 60).toString().padStart(2, '0');
        let minutesString = minutesLeft.toString().padStart(2, '0');

        let timeString = `${minutesString}:${secondsString}`;

        countdownElement.textContent = timeString;

        if (timeLeft < 0) {
          clearInterval(countdownInterval);
          countdownElement.textContent = 'Waktu Habis';
          localStorage.removeItem('endTime');
        }
      }, 1000);
    }
  });
</script>
