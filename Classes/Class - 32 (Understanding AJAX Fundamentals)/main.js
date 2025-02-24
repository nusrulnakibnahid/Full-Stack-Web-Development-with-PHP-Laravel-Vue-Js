console.log("Start Cooking");
setTimeout(() => {
  console.log("Gone out for bringing Masala");
  console.log("came with Masala");
  console.log("Mixing Masala");
  console.log("Put the Pan in the Oven");
  console.log("Done Cooking");
}, 2000);
console.log("washing pan");
console.log("preparing vegetables");

function fetchData() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("Data Fetched");
    }, 2000);
  });
}

fetchData().then((data) => {
  console.log(data);
});

async function displayData() {
  console.log("Data Fetching....");
  const data = await fetchData();
  console.log(data);
}

displayData();
