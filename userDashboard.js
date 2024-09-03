function populateTable() {
const tableBody = document.getElementById("table-body");

serverData.forEach((row) => {
const tr = document.createElement("tr");
Object.values(row).forEach((value) => {
const td = document.createElement("td");
td.textContent = value;
tr.appendChild(td);
});
tableBody.appendChild(tr);
});
}

populateTable();


