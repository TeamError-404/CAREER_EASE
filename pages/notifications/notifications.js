"use strict";

const unreadElementsArr = [...document.getElementsByClassName("unread")];

const ui_all_unread = () => {
  let unread = document.querySelectorAll(".unread");
  let dots = document.querySelectorAll(".dot");

  unread.forEach((element) => element.classList.remove("unread"));
  dots.forEach((element) => element.classList.remove("dot"));
  document.querySelector("span").textContent = 0;
};

const markUnread = document.getElementById("mark-all");
markUnread.addEventListener("click", ui_all_unread);

const unreadNotif = document.querySelectorAll(".unread");
for (let i = 0; i < unreadNotif.length; i++) {
  unreadNotif[i].addEventListener("click", function () {
    unreadNotif[i].classList.remove("unread");
  });
}

let counter = unreadElementsArr.length;
document.querySelector("span").textContent = counter;
console.log(counter);