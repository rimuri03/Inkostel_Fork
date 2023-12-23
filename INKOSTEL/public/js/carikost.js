  // navBar
  const navBar = document.querySelector("nav"),
  menuBtn = document.querySelectorAll(".menu-icon"),
  overlay = document.querySelector(".overlay");
  console.log(navBar, menuBtn, overlay);

  menuBtn.forEach(menuBtn => {
  menuBtn.addEventListener("click", () => {
    navBar.classList.toggle("open");
  });
  });

  overlay.addEventListener("click", () => {
  navBar.classList.remove("open");
  });


      // Event listener for search input
      document.getElementById('searchInput').addEventListener('keyup', (e) => {
      const searchData = e.target.value.toLowerCase();
      const filteredData = cardData.filter((item) => {
        return (
          item.title.toLowerCase().includes(searchData)
        );
      });
      displayItems(filteredData);
    });
    
    // Function to display filtered items
    function displayItems(data) {
      const cardContainer = document.querySelector("#conmain .row");
      cardContainer.innerHTML = ""; // Clear the existing items
    
      data.forEach((item) => {
        createCard(item);
      });
    }

  // Ambil semua tombol filter
  const filterButtons = document.querySelectorAll('.filter-button .btn');

  // Tambahkan event listener pada setiap tombol filter
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      const filterType = button.getAttribute('data-filter'); 

      // Lakukan pemfilteran berdasarkan jenis filter
      const filteredData = cardData.filter(item => {
        if (filterType === 'semua') {
          return true; 
        } else if (filterType === 'putra') {
          return item.title.includes('Putra'); 
        } else if (filterType === 'putri') {
          return item.title.includes('Putri'); 
        } else if (filterType === 'termurah') {
          return parseInt(item.cardText1) <= 10; 
        }else if (filterType === 'terdekat') {
          return parseInt(item.cardText2) < 1000; 
        }
      });
      // Tampilkan data yang telah difilter
      displayItems(filteredData);
    });
  });


  // untuk mengetahui terdekat
  function setDistanceText(id, cardText2Value) {
    const cardText2 = document.getElementById(`jarak-${id}`);
  
    if (cardText2Value >= 1000) {
        cardText2.textContent = (cardText2Value / 1000) + " KM";
    } else {
        cardText2.textContent = (cardText2Value + " Meter");
    }
}

  

  



  

