<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books Requests</title>
</head>

<body>
  <div>
    <?php include 'header.php' ?>
  </div>
  <section class="h-[500px] mt-10">

    <div class="font-sans overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100 whitespace-nowrap">
          <tr>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Request From
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Book Name
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Genre
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Actions
            </th>
          </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
          <tr>
            <td class="px-4 py-4 text-sm text-gray-800">
              John Doe
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              Ice and Fire
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              Mystery
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <button class="text-blue-600 mr-4">Approve</button>
              <button class="text-red-600">Decline</button>
            </td>
          </tr>

          <tr>
            <td class="px-4 py-4 text-sm text-gray-800">
              John Doe
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              Ice and Fire
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              Mystery
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <button class="text-blue-600 mr-4">Approve</button>
              <button class="text-red-600">Decline</button>
            </td>
          </tr>

          <tr>
            <td class="px-4 py-4 text-sm text-gray-800">
              John Doe
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              Ice and Fire
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              Mystery
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <button class="text-blue-600 mr-4">Approve</button>
              <button class="text-red-600">Decline</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <div>
    <?php include 'footer.php' ?>
  </div>
</body>

</html>