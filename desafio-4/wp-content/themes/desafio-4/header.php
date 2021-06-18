<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body>

  <header class="header">
    <div class="header-content">
      <a href="<?= get_site_url() ?>" class="logo">
        <svg width="140" height="50" viewBox="0 0 210 75" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M186.835 74.9695C193.093 74.7204 198.212 73.0047 202.215 69.818C202.979 69.2092 204.799 67.384 205.41 66.6142C207.033 64.5688 208.136 62.5782 208.873 60.3696C211.138 53.5711 209.972 44.6499 205.538 34.8591C201.742 26.4769 195.885 18.1634 185.665 6.64928C184.16 4.95501 179.677 0 179.648 0C179.638 0 179.882 0.424091 180.189 0.940555C182.847 5.40059 185.12 10.6541 186.359 15.2022C188.348 22.5 188.108 28.7627 185.656 33.619C183.964 36.9646 181.064 39.8624 177.802 41.4643C172.093 44.2677 163.733 44.4996 153.525 42.1429C152.822 41.9797 117.994 32.7149 76.1292 21.5541C34.2642 10.3921 0.00535583 1.26694 0 1.27445C-0.0118408 1.28411 97.2641 42.9965 147.762 64.6364C155.759 68.0625 157.897 68.9279 161.657 70.2507C171.268 73.6328 179.877 75.2465 186.835 74.9695Z" fill="black" />
        </svg>
      </a>

      <a href="<?= get_site_url() ?>/carrinho" class="cart">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36" viewBox="0 0 40 36" fill="none">
          <path d="M1.86664 2.26669H8.8" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
          <path d="M8.80005 2.26669L14.6667 25.2" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
          <path d="M15.7333 25.2H37.7333" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
          <path d="M18.4 34.2667C20.6092 34.2667 22.4 32.4759 22.4 30.2667C22.4 28.0576 20.6092 26.2667 18.4 26.2667C16.1908 26.2667 14.4 28.0576 14.4 30.2667C14.4 32.4759 16.1908 34.2667 18.4 34.2667Z" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
          <path d="M33.7333 34.2667C35.9424 34.2667 37.7333 32.4759 37.7333 30.2667C37.7333 28.0576 35.9424 26.2667 33.7333 26.2667C31.5241 26.2667 29.7333 28.0576 29.7333 30.2667C29.7333 32.4759 31.5241 34.2667 33.7333 34.2667Z" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
          <path d="M34.2667 19.4667H15.0666C14.2666 19.4667 13.4666 18.9333 13.3333 18.1333L10.8 9.20002C10.5333 8.00002 11.3333 6.93335 12.5333 6.93335H36.6666C37.8666 6.93335 38.8 8.13335 38.4 9.20002L35.8666 18.1333C35.8666 18.9333 35.2 19.4667 34.2667 19.4667Z" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
        </svg>
      </a>
    </div>
  </header>