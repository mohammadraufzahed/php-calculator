let form = document.querySelector("#formApp");
let res = document.querySelector("#result");
form.addEventListener("submit", sendRequest);

function sendRequest(e) {
  e.preventDefault();
  let numberOne = document.querySelector("#numberOne").value,
    numberTwo = document.querySelector("#numberTwo").value,
    operator = document.querySelector("#operator").value;
  let url = new URL(window.location.href + "calculator.php");
  let params = {
    numberOne: numberOne,
    numberTwo: numberTwo,
    operator: operator,
  };
  url.search = new URLSearchParams(params).toString();
  fetch(url, {
    method: "POST",
  })
    .then((response) => response.json())
    .then((jsonData) => (res.innerText = jsonData.result));
}
