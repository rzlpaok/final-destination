<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <?php
    function renderToast($message, $type = 'success')
    {
        $icon = $type === 'success'
            ? '<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/></svg>'
            : '<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/></svg>';
        $bgColor = $type === 'success' ? 'bg-green-100 text-green-600' : 'bg-orange-100 text-orange-600';
        $id = $type === 'success' ? 'success-toast' : 'alert-toast';
        ?>
        <div id="<?= $id ?>"
            class="fixed top-4 right-4 z-50 flex items-center w-full max-w-sm p-4 bg-white rounded-lg shadow-lg transition-all duration-300 ease-in-out"
            role="alert" data-dismissible="toast">
            <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-lg <?= $bgColor ?>">
                <?= $icon ?>
                <span class="sr-only"><?= $type === 'success' ? 'Check icon' : 'Warning icon' ?></span>
            </div>
            <div class="ml-3 text-sm font-medium text-gray-800"><?= htmlspecialchars($message) ?></div>
            <button type="button"
                class="ml-auto p-1.5 rounded-lg hover:bg-gray-100 text-gray-500 hover:text-gray-800 transition-colors"
                data-dismiss-target="#<?= $id ?>" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        <?php
    }
    ?>

    <?php if (isset($model['notification']['alert'])): ?>
        <?= renderToast($model['notification']['alert'], 'alert') ?>
    <?php endif; ?>

    <?php if (isset($model['notification']['success'])): ?>
        <?= renderToast($model['notification']['success'], 'success') ?>
        <?php unset($model['notification']['success']); ?>
    <?php endif; ?>
</body>

</html>