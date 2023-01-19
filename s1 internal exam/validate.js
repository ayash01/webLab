const id= Document.getElementById("empid");
const empname = Document.getElementById("empName");
const jobname = Document.getElementById("job");
const manager = Document.getElementById("managerID");
const salary = Document.getElementById("salary");
const btn = Document.getElementById("btn");

const empIdError = Document.getElementById("idError")
const nameError = Document.getElementById("nameError");
const jobError = Document.getElementById("jobError");
const managerError = Document.getElementById("managerError");
const salaryError = Document.getElementById("salaryError");

btn.addEventListener("click", function (e) {

    let flag = false;

    if (!empid.value) {
        idError.value = "Please fill out ID field.";
        flag = true;
    }
    else if(len(empid.value) != 6) {
        idError.value = "Employee ID should contain 6 digits.";
        flag = true;
    }
    else if (isNaN(empid.value)) {
        idError.value = "Employee ID should only contain digits 0-9.";
        flag = true;
    }

    if (!empname.value) {
        nameError.value = "Please fill out name field.";
        flag = true;
    }

    if (!jobError.value) {
        jobError.value = "Please fill out job field.";
        flag = true;
    }

    if (!manager.value) {
        managerError.value = "Please fill out manager ID field.";
        flag = true;
    }
    else if (managerError.value != 6) {
        managerError.value = "Manager ID should contain 6 digits"
        flag = true;
    }

    if (!salary.value) {
        salaryError.value = "Please fill out salary field.";
        flag = true;
    }
    else if (isNaN(salary.value)) {
        salaryError.value = "Salary field should only contain digits 0-9";
        flag = true;
    }

    if (flag = true) {
        e.preventDefault();
        alert ("Please fill out the form correctly.");
    }
    else {
        alert ("Details added");
    }

})