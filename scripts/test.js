/*
    Author:     Mark Schuurmans
    Date:       17-3-2021
    File:       scripts/test.js
*/

const colors = {
    green: "#0dd66c",
    orange: "#fb6340",
    red: "#f5365c",
};

const submitBtn = document.querySelector(".submit");
const resultElement = document.querySelector(".result");
const selectFields = [...document.querySelectorAll("select")];

submitBtn.addEventListener("click", () => {
    resultElement.innerHTML = "Uitslag bereken...";
    let result = 0;
    for (const selectField of selectFields) {
        let { value, selectedIndex, options } = selectField;
        const option = [...options];
        // console.log(selectedIndex);
        console.log(option);

        let color;
        if (option.length == 3) {
            if (!selectedIndex) {
                color = colors.green;
            } else if (selectedIndex == 1) {
                color = colors.orange;
            } else {
                color = colors.red;
            }
        } else {
            if (!selectedIndex) {
                color = colors.green;
            } else {
                color = colors.red;
            }
        }
        const parent = selectField.parentElement;
        selectField.style.backgroundColor = color;

        result += parseInt(value);
    }
    resultElement.innerHTML = result;
});
