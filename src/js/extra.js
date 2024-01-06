const { Pool } = require('pg');

// Create a new pool instance with your database connection details
const pool = new Pool({
  user: 'your_username',
  host: 'your_host',
  database: 'your_database',
  password: 'your_password',
  port: 5432, // default PostgreSQL port
});

// Function to fetch new data from the database and format it into HTML
async function fetchAndFormatData() {
  try {
    // Connect to the database
    const client = await pool.connect();

    // Fetch the new data from the database
    const result = await client.query('SELECT * FROM your_table WHERE is_new = true limit 3');

    // Format the data into HTML
    let html = '';
    result.rows.forEach(row => {
      html += `
        <div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
            <img class="rounded-t-lg p-8" src="${row.image}" alt="product image">
          </a>
          <div class="px-5 pb-5">
            <a href="#">
              <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">${row.title}</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
              ${generateRatingStars(row.rating)}
              <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">${row.rating}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900 dark:text-white">$${row.price}</span>
              <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
          </div>
        </div>
      `;
    });

    // Close the database connection
    client.release();

    // Insert the HTML into the specified ID
    const targetElement = document.getElementById('newproducts');
    targetElement.innerHTML = html;
  } catch (error) {
    console.error('Error fetching and formatting data:', error);
  }
}

// Call the function to fetch and format new data
fetchAndFormatData();

// Function to generate the rating stars HTML
function generateRatingStars(rating) {
  const filledStars = Math.floor(rating);
  const halfStar = rating % 1 !== 0;
  const emptyStars = 5 - filledStars - (halfStar ? 1 : 0);

  let starsHTML = '';
  for (let i = 0; i < filledStars; i++) {
    starsHTML += '<svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>';
  }
  if (halfStar) {
    starsHTML += '<svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>';
  }
  for (let i = 0; i < emptyStars; i++) {
    starsHTML += '<svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>';
  }

  return starsHTML;
}