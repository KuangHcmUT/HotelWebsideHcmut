const btn = document.querySelector('.btn-open');
const modal = document.querySelector('.add-model');
const canceladd = document.querySelector('.addmodel-close');
const contain = document.querySelector('.js-container');
const header = document.querySelector('.header');

function showaddmodel() {
    modal.classList.add('open');
    header.classList.add('change-index'); // thêm class open vào model
}

function closeaddmodel() {
    modal.classList.remove('open');
    header.classList.remove('change-index'); // gỡ class open khỏi model
}

function show_search_result() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search-phone");
    filter = input.value;
    table = document.getElementById("main-table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function hide_row(index) {
    let row = document.getElementById(''.concat("Row", index));
    row.style.display = 'none';
}

btn.addEventListener('click', showaddmodel);
canceladd.addEventListener('click', closeaddmodel);

modal.addEventListener('click', closeaddmodel);
contain.addEventListener('click', function(event) {
    event.stopPropagation();
})