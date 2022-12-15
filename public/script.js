const subMenus = document.querySelectorAll('.sidebarSubmenu');
const sideBar = document.querySelector('.sidebar');

subMenus.forEach(i=> {
    const subMenu = i.parentElement.querySelector('a:first-child');
    subMenu.addEventListener('click', function (e) {
        e.preventDefault();
        if(i.classList.contains('open')) {
            subMenus.forEach(item=> {
                const subMenu = item.parentElement.querySelector('a:first-child');

                subMenu.classList.remove('open');
                i.classList.remove('sidebarMenu__items--active');
            })
        }

        this.classList.toggle('sidebarMenu__items--active');
        i.classList.toggle('open');
    })
})

sideBar.addEventListener('mouseleave', function () {
    subMenus.forEach(item=> {
        // const a = item.parentElement.querySelector('a:first-child');
        // a.classList.remove('sidebarMenu__items--active');
        item.classList.remove('open');
    })
})

// Dashboard Chart
var xValues = ["3 months", "4 months", "5 months", "6 months", "7 months", "8 months", "9 months", "10 months", "11 months", "12 months"];
var yValues = [4, 5, 6, 7, 8, 9, 10, 11, 12, 13];

new Chart("dashboardChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{

      borderColor: "blue",
      data: yValues
    }]
  },
  options:{
    aspectRatio: 1.3,
    legend: {display: false},
    responsive: false,
    scales: {
        yAxes: [{ticks: {min: 2, max:15}}],
    },
  }
});

var xValues = ["3 months", "4 months", "5 months", "6 months", "7 months", "8 months", "9 months", "10 months", "11 months", "12 months"];
var yValues = [26, 28, 30, 31, 32, 33, 34, 35, 35, 36];

new Chart("dashboardChart1", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{

      borderColor: "blue",
      data: yValues
    }]
  },
  options:{
    aspectRatio: 1.3,
    legend: {display: false},
    responsive: false,
    scales: {
        yAxes: [{ticks: {min: 25, max:38}}],
    },
  }
});

// Gallery
function myFunction() {
  document.getElementById("filterList").classList.toggle("show");
}

const filterBox = document.getElementById("filterList");

filterBox.addEventListener('mouseleave', function () {
  filterBox.classList.remove('show');
})
