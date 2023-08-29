
function myFunction() {
  alert("Thank You for choosing us!");
}
let input = prompt("Hi I'm a Bot,do you need any help?");
while (input == "yes") {
  let purpose = prompt("OK, please specify your issue!");
  if (purpose == "rent") {
    alert("We have alot of places that can be very beneficial for you.So to discover those places visit the section of our website.");
    break;
  }
  else if (purpose == "commercial") {
    alert("We have many commercial building that can rented to make offices depending on your preferred location you can explore different options.");
    break;
  }
  else if (purpose == "buy") {
    alert("To buy houses and appartments explore the  section of our website");
    break;
  }
  else if (purpose == "hostel") {
    alert("hello students, find a place that comforts you.Visit different options available on our website");
    break;
  }
  break;
}
while (input == "No") {
  console.log("no");
}
if (input != "yes" && input != "no") {
  alert("Sorry I could not understand. Hope to help you next time.")
}