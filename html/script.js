let feedbacks = [];

const form = document.getElementById("form");

function addUser() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let text = document.getElementById("text").value;

  let user = {
    username: name,
    useremail: email,
    usertext: text,
  };

  feedbacks.push(user);

  console.log(feedbacks);
}

document.getElementById("btn").addEventListener("click", addUser);
