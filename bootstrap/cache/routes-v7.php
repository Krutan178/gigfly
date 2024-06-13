<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/hosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.hosts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/clear-cache-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache-all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/delete-multiple-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete-multiple-files',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6gQ6Ndl5xP0mIpHH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inbox',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4J7I9nPbP5rBCRaz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pusher.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'messages.seen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/updateContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'star',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favorites',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shared',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'conversation.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/deleteMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'avatar.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activeStatus.set',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.pusher.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.idInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fetch.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.messages.seen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contacts.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.star',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.favorites',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shared',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.conversation.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.avatar.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.activeStatus.set',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/form-components/form-components.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tSUi2LzKQPH8L2CU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/form-components/form-components.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8I9UykhU0cvgqKmK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.render.button',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/assets/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.scripts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/assets/styles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.styles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paymentIPN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/api/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PExzo1R31NDrAYNZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::54mSFqBBdEbCp0Zb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ph1kAdHjc5aBw3DZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public_html/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.custom_updatelivewire.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks/queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FWcqmfitFjgBJ264',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gvwUBaLtammyBh3P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KLhmujHrfpiRmi8G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/post/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OatOI98SZf4KKbow',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/post/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4xHxm0W2I4GIe8dk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/explore/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uLDmbGQ5nOUYzDuw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dqPEJ8T4XbEiaYQv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tvq7ks1BsS1UuuaQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fuurapt5uOfRdKGL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/newsletter/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UU6vC9zKRtCPgpFt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IMrGZc3xO6eCDEJm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6UBNcFg7Tr1cR4ty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FYW5XXtrnnxUXI6t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b5l2kb5v5Jwm0M96',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cm7NPDADggOWdmNg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9E5HU451hZlN2fGG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KTFLhZPNBF4rNanZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/orders/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EuiGgbqaff8R7pPm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/orders/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zXrw6kOZvvZeBjkq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ZR29uXV1hIHQqP2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dftisH07sXxMXTpC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LikmSLC7XAuSFmxO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yWmgctPbTHSM3P7v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RNfuLT1CRj2FbBjD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zq6xtjCmEDAZRrkr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lcqu1Rh8v240lqzC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fDLHlILxtDpyWjFl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HabbP9IR3dw7wqkl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D3GkHenwMWCqP4Y6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/start_selling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uOE1GIAfPmZWcbmI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kv0D7aidq8Yg2qlT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Q5WHSV4jHomTVSF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TyXB4BacqrSviwtE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RFdvpdBHPedFLDO9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/portfolio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eY0ooAnkwGIpNEUT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/portfolio/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NEUJDM09ClE1k55D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/earnings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tttW6rzY0m2XhHCF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bO19iV70IaS0LQNR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/withdrawals/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RtijCcFxIcF1uzFv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/withdrawals/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3iBL6zoBuPbOOjPp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gLUxCGP84UixBODg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4CbBH9NktixTKxba',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dgr9ngsQIPr81ZkE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KirDAJFmUONeY6iu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/help/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bO3WR9k8ZBDSkwlG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4GTLixKZEtZddWEs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t6vVjnxAwuMaLlBG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::axc217hxnoajQ5j1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aKmiZLr0u3pdnByn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jOizjvULFno1Rjvo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tV7xCu6CjkwGrPLr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sjfb0Q7m1odp9WjT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/github' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hK5IecUZi9RKp2a8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/github/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CTMSjA6rt3wvCZ7g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/linkedin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1dPGTAybGTDRM2SJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/linkedin/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Em6uTjTPBHGeZl82',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VLFF5om3xWkvwoAX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oQpd3qeVTp64dJqU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qmI0UiWlfjGR5Va1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SHadLESXtdFvVFT6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/twitter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RRBrtqbv4SJm4zDD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/twitter/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BrCn7tCBRd8dqTuC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HPCgzEzrfn3ACZ48',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/asaas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hL74UXtA6GqSabwZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/campay/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::caqVrUmgiBWGLxSI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/campay/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9c9RNNtkoeARbfjE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b5lQsx4M2keIIlbv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GgFxr39HQX12Sa2E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/cpay/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9alc9O4RSjmrPRua',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/cpay/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2UZUEEucTEZOYJoV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/duitku' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6yygLoAdJxbPKcu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/ecpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qxnhjC6V25Iieo4m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/epoint/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q4S87O6GW3gCgUxs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/epoint/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u6dqb62haP3pETgg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/fastpay/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rYFlIE8eXTIyr06t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/fastpay/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OXFkK1yNU5LJPhKZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/fastpay/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U9NUH6hkSbrO91yg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r8Ki8mohIQDjhZRa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/freekassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rUheNk77wY9hO7Wn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/freekassa/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KKxdHdUBI6708mzj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/freekassa/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFPNSFNvZyIUzchB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/genie-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sPhfMmPE4g7bQsAC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1WIurKi42jOGcv8C',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/iyzico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GaaRKRGT8KbClf4u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4U56O0krwE6a4JgE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/mercadopago/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9eClvtmazUUCeXMy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/mercadopago/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OBvQZllixaLO3Wod',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/mercadopago/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dy4OqLkYoHX5ATpk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bZSHttYpeWaEFRLB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aP3Wc5ml0BvX0alk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/nowpayments/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n53oPe30JYpWQsRo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/nowpayments/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SJRZ9vwo329hFKnz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/nowpayments/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::umm9lyyn3geH9BTy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zyRSLyh2sGVeOGQY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paymob-pk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bQo78KBxQ7Yotvce',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WHvK9tIZpRW5BlND',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CmMfryz6jTHRXtcJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rnhWGSep3lx1jUqK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8pGVpE3yK8onnUhz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paytr/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q6OikOxopVqwF9Zr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paytr/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GWR09gT3OVdrAeom',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9wcPKHHApP2xahpv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gnCL0je3QwROLiJC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/robokassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6vpgByhE8Iu56By',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ndw214pZlUk8bMDr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UrEX5N4FSEoSmCsC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/xendit/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nXXZfv7P3v6VU9oX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/xendit/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4IJ9W3jS67VKJMGl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QbS1boMDUGLxd25I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wPG3I2ensJS2KnSB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/restricted' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m9rpllobIAmAqU8Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tinkaaXVoOzm41w8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L6cpLryeFIX1Pj5h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A19N8FvFrgZ7CVe7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HTuQ4vunq1BYQXVm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::exuL5IpZxLh5N1m8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tUWFybYk2r1HFwwz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fhC3Vi6TbAuL5tP5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::peGQcEwwEfDQZpXH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OaxFZ367fNUf1eHH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/levels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ciMGXlBd5yoWNu7L',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y0kou129XfNzdlXc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tuEGSmjDBYuntojc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/gigs/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EE7HJn1iLN0xZRkw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/packages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XCnnos08yBtyqPl6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/packages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ffUu78mo3817Enpl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KqhuxKyiRXYY4BFp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/attributes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JPX9FLvtnT5BNYal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AcdnEF7cZkdoBs0E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/portfolios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ITWLf5PuCHrkDEhH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::76Lr5dIaJX1ezvxb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::weYibJFbP1kEZCCE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8EvLWWDjfHDKiTxD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QveM7ls3YrTLOLn1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3FIKL84bW4jrBarK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tIia5eUR5uLQ1YVm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KPEeu5nVAOJcF7At',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/skills/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ggcDcw29X7HdnbhT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eqlloSZXjRoi35ND',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nkcvhlkELYokJgjF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/bids/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hxlIkGhSz7HMF4Ks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oix8h4VZO2JtyQO3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ScIE2ZWUQun3Yx8C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aYs7S0kLIVLoTeLu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P2yCoJiKGhi7GOC7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/subcategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aeIPEN6HAQKGFE1m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/childcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::599gFcRwr96TLbHM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/childcategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vomdD1qVmCZl7a2L',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O0hUkYIFbECdFFwp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KB0MB5uHSVVntfHC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PKOKbdtxtwqCogAS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::paJspppVLZWxnIf1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nd1zZRdEWS2uv4X9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/conversations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kyynU7hOrzfno7O7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/advertisements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oQsLBiT9gMor5UVg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Haln0NImblylxPpA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HZFOE2p1LFrppFxm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/newsletter/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JwimJuzNIPcuXiU7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1MNGlS9ztiufPyu8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jEkY7P6oyVIM4MeK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d4fe2vtwf3XGglaP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::05BQt2hFNZ00w7tV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SeTkhraHCAiJLiqj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XLKOQqSlT1a5syax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yOIuShhRyEXR8D3U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/iyzico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pz6vIGQuNKCqqxK4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/duitku' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x3J34c9nctRWukla',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/genie-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r0B5WJlil8pyPrtX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/asaas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bxNpgI44daSgxmO8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/ecpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LHGmp8oyvW5bX5xM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/fastpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hk04BIJ5IZOvQ7fD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/freekassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::deJrE9UyJkn1BI0e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/paymob-pk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nb3TQ3K83Jtn8Z4r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/cpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CxMKUYlejXwzuEHz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/nowpayments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Ae8G1VdVRJjeV8Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WUgdEtLRTfTi6Nt1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fDxeEV9o6Ke910dV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mLQArmZIbMkPuhQg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mbxa7usBRQfW2VBk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0DoVdDGc9LgJLUMC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uszbRjerfrTcZh3i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GMudLumJZzY6FTMK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aMNXcjuzmLsehndp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IBncJXB4a7bMgzUB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7jOKYjdar0TqOEiN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h4mm0uKtStMLKtEl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5wC2NgWko4ZzK2EE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TVVIHN77G8ZeN9dh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5DWeT4pGOO677LO3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vF9eCw3qa0RrWEyU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/epoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dMiTq0WHwe8vI7g7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/campay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K8MXXBBAUneSJMqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/robokassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r6ZgwPFOLwDnSo2X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/payment/edit/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::63Vot6poSpQimLDX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/cloud' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVKEKGpiYESt2fik',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/cloud/amazon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XoXBAO9EZXACYGoK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/cloud/wasabi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GXaRy2CTUBYTk0p0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/cloud/cloudinary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lmUCMPmdqS93jxYh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/recaptcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cSOtGKky3KA0BiUI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/findip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dfZQ0dDhnr0ecUFN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zDb6XmXVk4L1QmCQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::24SzBHHsgFDGN22v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6YPjq1UKw0qWJu4H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cX49Rz64qQQvJpyx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cf1THU4nh77nvkgt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7vvLHjFogAMHJOq0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/publish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XK7IzqQF7l9MjnL7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U7ERTNg8nAH86uQ8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/seo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NajnG1lAiMxH24ZS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tz8gYZeF7QlWRouB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/withdrawal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J7dNg037r4EeFpMC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U18Zsk28pDiHnuO9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/hero' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vAe7IWyzyYZWyODH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KEnIgd2yA8R5R6sR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/verifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kmLJQghwWVxHzmYV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J2DNuEYFDf7YJpay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cy1cy0ZNh91qDxn3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6wS4Li3zPEX13DE5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KyFLuDtnGlxHiwYl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/crontab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HMC85gatKdkDYIAY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KtixsPVCJlgNqShq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::duzNDHs7tZvXAvs4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KfoL8lE3rHgZ8cqw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/licensing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4CS2i5dBRSY9YAZu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IqIgcKuEoSohA7cl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/dashboard/(?|s(?|ystem/logs(?|/api/f(?|olders/([^/]++)(?|/(?|download(*:151)|clear\\-cache(*:171))|(*:180))|iles/([^/]++)(?|/(?|download(*:217)|clear\\-cache(*:237))|(*:246)))|(?:/((?:.*)))?(*:270))|u(?|bcategories/(?|edit/([^/]++)(*:311)|delete/([^/]++)(*:334))|pport/reply/([^/]++)(*:363)))|users/(?|edit/([^/]++)(*:395)|details/([^/]++)(*:419)|message/([^/]++)(*:443)|restrict/([^/]++)(*:468))|l(?|evels/(?|edit/([^/]++)(*:503)|delete/([^/]++)(*:526))|anguages/(?|edit/([^/]++)(*:560)|translate/([^/]++)(*:586)))|gigs/(?|edit/([^/]++)(*:617)|analytics/([^/]++)(*:643))|p(?|a(?|ckages/edit/([^/]++)(*:680)|ges/edit/([^/]++)(*:705))|rojects/(?|milestones/([^/]++)(*:744)|plans/(?|edit/([^/]++)(*:774)|bidding/edit/([^/]++)(*:803))|categories/edit/([^/]++)(*:836)|skills/edit/([^/]++)(*:864)))|attributes/edit/([^/]++)(*:898)|orders/details/([^/]++)(*:929)|refunds/details/([^/]++)(*:961)|c(?|ategories/(?|edit/([^/]++)(*:999)|delete/([^/]++)(*:1022))|hildcategories/(?|edit/([^/]++)(*:1063)|delete/([^/]++)(*:1087))|ountries/edit/([^/]++)(*:1119))|newsletter/send/([^/]++)(*:1153)|blog/(?|comments/edit/([^/]++)(*:1192)|edit/([^/]++)(*:1214)))|/livewire/preview\\-file/([^/]++)(*:1257)|/inbox/(?|download/([^/]++)(*:1293)|group/([^/]++)(*:1316)|([^/]++)(*:1333)|api/download/([^/]++)(*:1363))|/wireui/icons/((?:outline|solid))/([^/]++)(*:1415)|/explore/projects/([^/]++)(?|(*:1453)|/([^/]++)(*:1471))|/p(?|ro(?|ject/([^/]++)/([^/]++)(*:1513)|file/([^/]++)(?|(*:1538)|/portfolio(?|(*:1560)|/([^/]++)(*:1578))))|age/([^/]++)(*:1602))|/blog/([^/]++)(*:1626)|/se(?|rvice/([^/]++)(*:1655)|ller/(?|gigs/(?|analytics/([^/]++)(*:1698)|edit/([^/]++)(*:1720))|re(?|views/details/([^/]++)(*:1757)|funds/details/([^/]++)(*:1788))|orders/(?|de(?|tails/([^/]++)(*:1827)|liver/([^/]++)(*:1850))|requirements/([^/]++)(*:1881))|p(?|ortfolio/edit/([^/]++)(*:1917)|rojects/(?|milestones/([^/]++)(*:1956)|bids/(?|checkout/([^/]++)(*:1990)|edit/([^/]++)(*:2012))))))|/account/(?|re(?|views/(?|create/([^/]++)(*:2067)|preview/([^/]++)(*:2092)|edit/([^/]++)(*:2114))|funds/(?|request/([^/]++)(*:2149)|details/([^/]++)(*:2174)))|projects/(?|checkout/([^/]++)(*:2214)|milestones/([^/]++)(*:2242)|edit/([^/]++)(*:2264)))|/categories/([^/]++)(?|(*:2298)|/([^/]++)(?|(*:2319)|/([^/]++)(*:2337)))|/hire/([^/]++)(*:2362)|/messages/(?|new/([^/]++)(*:2396)|([^/]++)(*:2413))|/reviews/([^/]++)(*:2440)|/uploads/(?|re(?|strictions/([^/]++)(*:2485)|quirements/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2540))|d(?|ocuments/([^/]++)(*:2571)|elivered/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2624))|verifications/([^/]++)/([^/]++)/([^/]++)(*:2674)|offers/(?|([^/]++)(*:2701)|work/([^/]++)(*:2723))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.clear-cache',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.delete',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fkfldcJXTmCmOLfK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ijOprUkzZ9la5RV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h0a9IUZinCHW4JDf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uMa3AbklhXNExeaF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xkaBsPq8WvN6DovT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IFAxvWUdWBMYzs0f',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BOzTcm43CzA7dV0r',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HUljsGkmAN1FJYqZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mu9XRX9aqYyO88hm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3phm2OkMFIGGJj5G',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kJrVXEcDNvphDBL4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dpHUPRgIjVPql5ei',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aSzwHhruJ99yigwy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qmcXlcXZdmENZKEc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x4QjobCS3efvzlSG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fPhC8V5BCVuLyu5H',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ETpZDpHCUtX9mvej',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ko5UmJ24GZZ3XgnV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BuoQFz0czgE8xH8B',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k5O7igq7S207BBBS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w28hjtZeza1kzBje',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::26ATGxd7LEZdePrS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NgOoO0wzjpbHuYt7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S2PWgBnr7Kg2w1Wz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1022 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rlojtf82lhbOrzoa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1063 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kk6LUBAPvyFFId5X',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YwaEs94LyPX5NIFU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d0XvuPXFYSxnMgPR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HjyFPAWnQc7u9DPx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cy69As5c85ulo7n1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ffrJAOf4FzgdRwYe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.icons',
          ),
          1 => 
          array (
            0 => 'style',
            1 => 'icon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eHvxDPjop2Eow19m',
          ),
          1 => 
          array (
            0 => 'category_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZNUs4YuSZII9gMvb',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'skill_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JIAGoyyAB69ALYtI',
          ),
          1 => 
          array (
            0 => 'pid',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q3qqVlKz1pp4Rdxo',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qnmeeQLCAMnqMSlQ',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::efzmecUtR5t86Qty',
          ),
          1 => 
          array (
            0 => 'username',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IbY0AXlIIiVRhShu',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HMiu5C0EKLC4ttmp',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rOAekyVkDnI4ukuf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FdBwzlHUxfKd4Izz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::76CiAABsiOBMoW8o',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::089uqpH0sH7Bp0MX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Cs2fvoFZHg2OBYa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2cKuAVFqHTGBjh1e',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1p4UKyEKHD1V6LK1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bi3Z7A2ZyMjEygGl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uv63fF0PWirIfiNj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BwCvaclG82OJ0jTC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EBqTJ6JDbJnhTcfs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B1LP91GMRDwgqBgG',
          ),
          1 => 
          array (
            0 => 'itemId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gN7jckMS7WosHg8E',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::71WPtUmXI44h1dMN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::12JX6is3PBR9EVbI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m5W4rKOR0uGlAXeY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uos1kd78C9YL1dE5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eUrmXIAS3o723JCf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8h0tzRVuUjIHHU6I',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rilB800FOWxR6DTu',
          ),
          1 => 
          array (
            0 => 'category_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AFxDUiZ9RLDusNhd',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'subcategory_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OOW4o7OShxJFodbT',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'subcategory_slug',
            2 => 'childcategory_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZpLt60plIuZP6D96',
          ),
          1 => 
          array (
            0 => 'keyword',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6bf2CbuCyKBO5Ftr',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XjFryGWghO55LTOZ',
          ),
          1 => 
          array (
            0 => 'conversationId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bivl5OljdVXhawDn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JrFgpuFqJwSixTeR',
          ),
          1 => 
          array (
            0 => 'uid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t4LJkBZ3uOe2jWET',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'reqId',
            3 => 'fileId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VHqaYjZvFOqrvu8s',
          ),
          1 => 
          array (
            0 => 'uid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g4SOy3RgTnREk9mJ',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'workId',
            3 => 'fileId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wc9KwXMQAwyDQynL',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'fileId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xppS3saJW21LEIhq',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qb6IM5N1p5gPtpun',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.hosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/hosts',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.hosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/clear-cache-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache-all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete-multiple-files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/delete-multiple-files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete-multiple-files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'auth:admin',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          4 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/update',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'livewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6gQ6Ndl5xP0mIpHH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'as' => 'generated::6gQ6Ndl5xP0mIpHH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inbox' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'inbox',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4J7I9nPbP5rBCRaz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'generated::4J7I9nPbP5rBCRaz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'fetch.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'attachments.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'pusher.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'messages.seen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'star',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'favorites',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'shared',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'conversation.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'message.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'avatar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'activeStatus.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/group/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'group',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.pusher.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.idInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.idInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.fetch.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.attachments.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.messages.seen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.contacts.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.star',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.favorites',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.shared',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.conversation.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.avatar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.activeStatus.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tSUi2LzKQPH8L2CU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'form-components/form-components.js',
      'action' => 
      array (
        'uses' => 'Rawilk\\FormComponents\\Controllers\\FormComponentsJavaScriptAssets@source',
        'controller' => 'Rawilk\\FormComponents\\Controllers\\FormComponentsJavaScriptAssets@source',
        'as' => 'generated::tSUi2LzKQPH8L2CU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8I9UykhU0cvgqKmK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'form-components/form-components.js.map',
      'action' => 
      array (
        'uses' => 'Rawilk\\FormComponents\\Controllers\\FormComponentsJavaScriptAssets@maps',
        'controller' => 'Rawilk\\FormComponents\\Controllers\\FormComponentsJavaScriptAssets@maps',
        'as' => 'generated::8I9UykhU0cvgqKmK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.icons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/icons/{style}/{icon}',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\IconsController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\IconsController',
        'as' => 'wireui.icons',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'style' => '(outline|solid)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.render.button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/button',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\ButtonController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\ButtonController',
        'as' => 'wireui.render.button',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.assets.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/scripts',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'as' => 'wireui.assets.scripts',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.assets.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/styles',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'as' => 'wireui.assets.styles',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paymentIPN',
      'action' => 
      array (
        'uses' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'controller' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'as' => 'payment_ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PExzo1R31NDrAYNZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/api/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@upload',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@upload',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PExzo1R31NDrAYNZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::54mSFqBBdEbCp0Zb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c940000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::54mSFqBBdEbCp0Zb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ph1kAdHjc5aBw3DZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@upload',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@upload',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ph1kAdHjc5aBw3DZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.custom_updatelivewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public_html/livewire/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'livewire.custom_updatelivewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FWcqmfitFjgBJ264' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:135:"function() {

        \\Illuminate\\Support\\Facades\\Artisan::call(\'queue:work\', [\'--stop-when-empty\' => true, \'--force\' => true]);

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c8e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::FWcqmfitFjgBJ264',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gvwUBaLtammyBh3P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:87:"function() {

        \\Illuminate\\Support\\Facades\\Artisan::call(\'schedule:run\');

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c8c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::gvwUBaLtammyBh3P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KLhmujHrfpiRmi8G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Home\\HomeComponent',
        'namespace' => 'App\\Livewire\\Main\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KLhmujHrfpiRmi8G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OatOI98SZf4KKbow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'post/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Post\\ServiceComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Post\\ServiceComponent',
        'namespace' => 'App\\Livewire\\Main\\Post',
        'prefix' => '/post',
        'where' => 
        array (
        ),
        'as' => 'generated::OatOI98SZf4KKbow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4xHxm0W2I4GIe8dk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'post/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Post\\ProjectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Post\\ProjectComponent',
        'namespace' => 'App\\Livewire\\Main\\Post',
        'prefix' => '/post',
        'where' => 
        array (
        ),
        'as' => 'generated::4xHxm0W2I4GIe8dk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uLDmbGQ5nOUYzDuw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::uLDmbGQ5nOUYzDuw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eHvxDPjop2Eow19m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Explore\\Projects\\CategoryComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Explore\\Projects\\CategoryComponent',
        'namespace' => 'App\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::eHvxDPjop2Eow19m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZNUs4YuSZII9gMvb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}/{skill_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Explore\\Projects\\SkillComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Explore\\Projects\\SkillComponent',
        'namespace' => 'App\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::ZNUs4YuSZII9gMvb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JIAGoyyAB69ALYtI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/{pid}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Project\\ProjectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Project\\ProjectComponent',
        'namespace' => 'App\\Livewire\\Main\\Project',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::JIAGoyyAB69ALYtI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dqPEJ8T4XbEiaYQv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Blog\\BlogComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Blog\\BlogComponent',
        'namespace' => 'App\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::dqPEJ8T4XbEiaYQv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HMiu5C0EKLC4ttmp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Blog\\ArticleComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Blog\\ArticleComponent',
        'namespace' => 'App\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::HMiu5C0EKLC4ttmp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tvq7ks1BsS1UuuaQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Sellers\\SellersComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Sellers\\SellersComponent',
        'namespace' => 'App\\Livewire\\Main\\Sellers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::Tvq7ks1BsS1UuuaQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fuurapt5uOfRdKGL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Redirect\\RedirectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Redirect\\RedirectComponent',
        'namespace' => 'App\\Livewire\\Main\\Redirect',
        'prefix' => '/redirect',
        'where' => 
        array (
        ),
        'as' => 'generated::fuurapt5uOfRdKGL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UU6vC9zKRtCPgpFt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Newsletter\\VerifyComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Newsletter\\VerifyComponent',
        'namespace' => 'App\\Livewire\\Main\\Newsletter',
        'prefix' => '/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::UU6vC9zKRtCPgpFt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Service\\ServiceComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Service\\ServiceComponent',
        'namespace' => 'App\\Livewire\\Main\\Service',
        'prefix' => '/service',
        'where' => 
        array (
        ),
        'as' => 'service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IMrGZc3xO6eCDEJm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Cart\\CartComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Cart\\CartComponent',
        'namespace' => 'App\\Livewire\\Main\\Cart',
        'prefix' => '/cart',
        'where' => 
        array (
        ),
        'as' => 'generated::IMrGZc3xO6eCDEJm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6UBNcFg7Tr1cR4ty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Checkout\\CheckoutComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Checkout\\CheckoutComponent',
        'namespace' => 'App\\Livewire\\Main\\Checkout',
        'prefix' => '/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::6UBNcFg7Tr1cR4ty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FYW5XXtrnnxUXI6t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Settings\\SettingsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Settings\\SettingsComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Settings',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::FYW5XXtrnnxUXI6t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b5l2kb5v5Jwm0M96' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Password\\PasswordComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Password\\PasswordComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Password',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::b5l2kb5v5Jwm0M96',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cm7NPDADggOWdmNg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Profile\\ProfileComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Profile',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::Cm7NPDADggOWdmNg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9E5HU451hZlN2fGG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Verification\\VerificationComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Verification\\VerificationComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Verification',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::9E5HU451hZlN2fGG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KTFLhZPNBF4rNanZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Orders\\OrdersComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Orders',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::KTFLhZPNBF4rNanZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EuiGgbqaff8R7pPm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::EuiGgbqaff8R7pPm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zXrw6kOZvvZeBjkq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::zXrw6kOZvvZeBjkq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ZR29uXV1hIHQqP2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Reviews',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::6ZR29uXV1hIHQqP2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B1LP91GMRDwgqBgG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/create/{itemId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::B1LP91GMRDwgqBgG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gN7jckMS7WosHg8E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::gN7jckMS7WosHg8E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::71WPtUmXI44h1dMN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::71WPtUmXI44h1dMN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dftisH07sXxMXTpC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Favorite',
        'prefix' => 'account/favorite',
        'where' => 
        array (
        ),
        'as' => 'generated::dftisH07sXxMXTpC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LikmSLC7XAuSFmxO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Billing\\BillingComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Billing\\BillingComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Billing',
        'prefix' => 'account/billing',
        'where' => 
        array (
        ),
        'as' => 'generated::LikmSLC7XAuSFmxO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yWmgctPbTHSM3P7v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Refunds',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::yWmgctPbTHSM3P7v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::12JX6is3PBR9EVbI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/request/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::12JX6is3PBR9EVbI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m5W4rKOR0uGlAXeY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::m5W4rKOR0uGlAXeY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RNfuLT1CRj2FbBjD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Deposit\\DepositComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Deposit\\DepositComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::RNfuLT1CRj2FbBjD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zq6xtjCmEDAZRrkr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Deposit\\HistoryComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Deposit\\HistoryComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::zq6xtjCmEDAZRrkr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lcqu1Rh8v240lqzC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Projects',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::Lcqu1Rh8v240lqzC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uos1kd78C9YL1dE5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::Uos1kd78C9YL1dE5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eUrmXIAS3o723JCf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::eUrmXIAS3o723JCf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8h0tzRVuUjIHHU6I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Projects\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Projects\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::8h0tzRVuUjIHHU6I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fDLHlILxtDpyWjFl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Sessions\\SessionsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Sessions\\SessionsComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Sessions',
        'prefix' => 'account/sessions',
        'where' => 
        array (
        ),
        'as' => 'generated::fDLHlILxtDpyWjFl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HabbP9IR3dw7wqkl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Account\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Account\\Offers\\OffersComponent',
        'namespace' => 'App\\Livewire\\Main\\Account\\Offers',
        'prefix' => 'account/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::HabbP9IR3dw7wqkl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D3GkHenwMWCqP4Y6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Create\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Create\\CreateComponent',
        'namespace' => 'App\\Livewire\\Main\\Create',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D3GkHenwMWCqP4Y6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uOE1GIAfPmZWcbmI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'start_selling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Become\\SellerComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Become\\SellerComponent',
        'namespace' => 'App\\Livewire\\Main\\Become',
        'prefix' => '/start_selling',
        'where' => 
        array (
        ),
        'as' => 'generated::uOE1GIAfPmZWcbmI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kv0D7aidq8Yg2qlT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Home\\HomeComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Home',
        'prefix' => 'seller/home',
        'where' => 
        array (
        ),
        'as' => 'generated::Kv0D7aidq8Yg2qlT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Q5WHSV4jHomTVSF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Gigs\\GigsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Gigs',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::2Q5WHSV4jHomTVSF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rOAekyVkDnI4ukuf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::rOAekyVkDnI4ukuf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FdBwzlHUxfKd4Izz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::FdBwzlHUxfKd4Izz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TyXB4BacqrSviwtE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Reviews',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::TyXB4BacqrSviwtE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::76CiAABsiOBMoW8o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Reviews\\Options',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::76CiAABsiOBMoW8o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RFdvpdBHPedFLDO9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Orders\\OrdersComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Orders',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::RFdvpdBHPedFLDO9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Cs2fvoFZHg2OBYa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::6Cs2fvoFZHg2OBYa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2cKuAVFqHTGBjh1e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/deliver/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::2cKuAVFqHTGBjh1e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1p4UKyEKHD1V6LK1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/requirements/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::1p4UKyEKHD1V6LK1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eY0ooAnkwGIpNEUT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Portfolio',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::eY0ooAnkwGIpNEUT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NEUJDM09ClE1k55D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::NEUJDM09ClE1k55D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bi3Z7A2ZyMjEygGl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::bi3Z7A2ZyMjEygGl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tttW6rzY0m2XhHCF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/earnings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Earnings',
        'prefix' => 'seller/earnings',
        'where' => 
        array (
        ),
        'as' => 'generated::tttW6rzY0m2XhHCF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bO19iV70IaS0LQNR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::bO19iV70IaS0LQNR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RtijCcFxIcF1uzFv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::RtijCcFxIcF1uzFv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3iBL6zoBuPbOOjPp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::3iBL6zoBuPbOOjPp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gLUxCGP84UixBODg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Refunds',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::gLUxCGP84UixBODg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::089uqpH0sH7Bp0MX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Refunds\\Options',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::089uqpH0sH7Bp0MX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4CbBH9NktixTKxba' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Projects',
        'prefix' => 'seller/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::4CbBH9NktixTKxba',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uv63fF0PWirIfiNj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Projects\\Milestones',
        'prefix' => 'seller/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::uv63fF0PWirIfiNj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dgr9ngsQIPr81ZkE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::dgr9ngsQIPr81ZkE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BwCvaclG82OJ0jTC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::BwCvaclG82OJ0jTC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EBqTJ6JDbJnhTcfs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::EBqTJ6JDbJnhTcfs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KirDAJFmUONeY6iu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'seller',
        ),
        'uses' => 'App\\Livewire\\Main\\Seller\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Seller\\Offers\\OffersComponent',
        'namespace' => 'App\\Livewire\\Main\\Seller\\Offers',
        'prefix' => 'seller/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::KirDAJFmUONeY6iu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bO3WR9k8ZBDSkwlG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'help/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Help\\Contact\\ContactComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Help\\Contact\\ContactComponent',
        'namespace' => 'App\\Livewire\\Main\\Help\\Contact',
        'prefix' => '/help',
        'where' => 
        array (
        ),
        'as' => 'generated::bO3WR9k8ZBDSkwlG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rilB800FOWxR6DTu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Categories\\CategoryComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Categories\\CategoryComponent',
        'namespace' => 'App\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::rilB800FOWxR6DTu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AFxDUiZ9RLDusNhd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category_slug}/{subcategory_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Categories\\SubcategoryComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Categories\\SubcategoryComponent',
        'namespace' => 'App\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::AFxDUiZ9RLDusNhd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OOW4o7OShxJFodbT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category_slug}/{subcategory_slug}/{childcategory_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Categories\\ChildcategoryComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Categories\\ChildcategoryComponent',
        'namespace' => 'App\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::OOW4o7OShxJFodbT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q3qqVlKz1pp4Rdxo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Profile\\ProfileComponent',
        'namespace' => 'App\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::Q3qqVlKz1pp4Rdxo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qnmeeQLCAMnqMSlQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Profile\\PortfolioComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Profile\\PortfolioComponent',
        'namespace' => 'App\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::qnmeeQLCAMnqMSlQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::efzmecUtR5t86Qty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Profile\\ProjectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Profile\\ProjectComponent',
        'namespace' => 'App\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::efzmecUtR5t86Qty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZpLt60plIuZP6D96' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hire/{keyword}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Hire\\HireComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Hire\\HireComponent',
        'namespace' => 'App\\Livewire\\Main\\Hire',
        'prefix' => '/hire',
        'where' => 
        array (
        ),
        'as' => 'generated::ZpLt60plIuZP6D96',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4GTLixKZEtZddWEs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Messages\\MessagesComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Messages\\MessagesComponent',
        'namespace' => 'App\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::4GTLixKZEtZddWEs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6bf2CbuCyKBO5Ftr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/new/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Messages\\NewComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Messages\\NewComponent',
        'namespace' => 'App\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::6bf2CbuCyKBO5Ftr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XjFryGWghO55LTOZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/{conversationId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
          3 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Messages\\ConversationComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Messages\\ConversationComponent',
        'namespace' => 'App\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::XjFryGWghO55LTOZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t6vVjnxAwuMaLlBG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Search\\SearchComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Search\\SearchComponent',
        'namespace' => 'App\\Livewire\\Main\\Search',
        'prefix' => '/search',
        'where' => 
        array (
        ),
        'as' => 'generated::t6vVjnxAwuMaLlBG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IbY0AXlIIiVRhShu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Page\\PageComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Page\\PageComponent',
        'namespace' => 'App\\Livewire\\Main\\Page',
        'prefix' => '/page',
        'where' => 
        array (
        ),
        'as' => 'generated::IbY0AXlIIiVRhShu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bivl5OljdVXhawDn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restricted',
          2 => 'tracker',
        ),
        'uses' => 'App\\Livewire\\Main\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Livewire\\Main\\Reviews',
        'prefix' => '/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::bivl5OljdVXhawDn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::axc217hxnoajQ5j1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\RegisterComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\RegisterComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::axc217hxnoajQ5j1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\LoginComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aKmiZLr0u3pdnByn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\VerifyComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\VerifyComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::aKmiZLr0u3pdnByn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jOizjvULFno1Rjvo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\RequestComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\RequestComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::jOizjvULFno1Rjvo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tV7xCu6CjkwGrPLr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Password\\ResetComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Password\\ResetComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::tV7xCu6CjkwGrPLr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sjfb0Q7m1odp9WjT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Password\\UpdateComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Password\\UpdateComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::sjfb0Q7m1odp9WjT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hK5IecUZi9RKp2a8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::hK5IecUZi9RKp2a8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CTMSjA6rt3wvCZ7g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::CTMSjA6rt3wvCZ7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1dPGTAybGTDRM2SJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::1dPGTAybGTDRM2SJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Em6uTjTPBHGeZl82' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::Em6uTjTPBHGeZl82',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VLFF5om3xWkvwoAX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::VLFF5om3xWkvwoAX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oQpd3qeVTp64dJqU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::oQpd3qeVTp64dJqU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qmI0UiWlfjGR5Va1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::qmI0UiWlfjGR5Va1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SHadLESXtdFvVFT6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::SHadLESXtdFvVFT6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RRBrtqbv4SJm4zDD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::RRBrtqbv4SJm4zDD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BrCn7tCBRd8dqTuC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::BrCn7tCBRd8dqTuC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HPCgzEzrfn3ACZ48' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Main\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Livewire\\Main\\Auth\\LogoutComponent',
        'namespace' => 'App\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::HPCgzEzrfn3ACZ48',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JrFgpuFqJwSixTeR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/restrictions/{uid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Restrictions\\FileController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Restrictions\\FileController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Restrictions',
        'prefix' => 'uploads/restrictions',
        'where' => 
        array (
        ),
        'as' => 'generated::JrFgpuFqJwSixTeR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VHqaYjZvFOqrvu8s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/documents/{uid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Documents',
        'prefix' => 'uploads/documents',
        'where' => 
        array (
        ),
        'as' => 'generated::VHqaYjZvFOqrvu8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t4LJkBZ3uOe2jWET' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/requirements/{orderId}/{itemId}/{reqId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Requirements',
        'prefix' => 'uploads/requirements',
        'where' => 
        array (
        ),
        'as' => 'generated::t4LJkBZ3uOe2jWET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g4SOy3RgTnREk9mJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/delivered/{orderId}/{itemId}/{workId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Delivered',
        'prefix' => 'uploads/delivered',
        'where' => 
        array (
        ),
        'as' => 'generated::g4SOy3RgTnREk9mJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wc9KwXMQAwyDQynL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/verifications/{id}/{type}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Verifications',
        'prefix' => 'uploads/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::Wc9KwXMQAwyDQynL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xppS3saJW21LEIhq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/offers/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@attachment',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@attachment',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Offers',
        'prefix' => 'uploads/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::xppS3saJW21LEIhq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qb6IM5N1p5gPtpun' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/offers/work/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@work',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@work',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Offers',
        'prefix' => 'uploads/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::qb6IM5N1p5gPtpun',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hL74UXtA6GqSabwZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/asaas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\AsaasController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\AsaasController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::hL74UXtA6GqSabwZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::caqVrUmgiBWGLxSI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/campay/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CampayController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\CampayController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::caqVrUmgiBWGLxSI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9c9RNNtkoeARbfjE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/campay/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CampayController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\CampayController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::9c9RNNtkoeARbfjE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b5lQsx4M2keIIlbv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CashfreeController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\CashfreeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::b5lQsx4M2keIIlbv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GgFxr39HQX12Sa2E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CashfreeController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\CashfreeController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::GgFxr39HQX12Sa2E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9alc9O4RSjmrPRua' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/cpay/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CpayController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\CpayController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::9alc9O4RSjmrPRua',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2UZUEEucTEZOYJoV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/cpay/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CpayController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\CpayController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::2UZUEEucTEZOYJoV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6yygLoAdJxbPKcu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/duitku',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\DuitkuController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\DuitkuController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::x6yygLoAdJxbPKcu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qxnhjC6V25Iieo4m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/ecpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\EcpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\EcpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::qxnhjC6V25Iieo4m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q4S87O6GW3gCgUxs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/epoint/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\EpointController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\EpointController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::q4S87O6GW3gCgUxs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u6dqb62haP3pETgg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/epoint/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\EpointController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\EpointController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::u6dqb62haP3pETgg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rYFlIE8eXTIyr06t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/fastpay/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FastpayController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\FastpayController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::rYFlIE8eXTIyr06t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OXFkK1yNU5LJPhKZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/fastpay/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FastpayController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\FastpayController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::OXFkK1yNU5LJPhKZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U9NUH6hkSbrO91yg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/fastpay/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FastpayController@cancel',
        'controller' => 'App\\Http\\Controllers\\Callback\\FastpayController@cancel',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::U9NUH6hkSbrO91yg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r8Ki8mohIQDjhZRa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FlutterwaveController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\FlutterwaveController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::r8Ki8mohIQDjhZRa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rUheNk77wY9hO7Wn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/freekassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FreekassaController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\FreekassaController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::rUheNk77wY9hO7Wn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KKxdHdUBI6708mzj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/freekassa/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FreekassaController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\FreekassaController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::KKxdHdUBI6708mzj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFPNSFNvZyIUzchB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/freekassa/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FreekassaController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\FreekassaController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::rFPNSFNvZyIUzchB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sPhfMmPE4g7bQsAC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/genie-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\GenieController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\GenieController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::sPhfMmPE4g7bQsAC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1WIurKi42jOGcv8C' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/genie-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\GenieController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\GenieController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::1WIurKi42jOGcv8C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GaaRKRGT8KbClf4u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/iyzico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\IyzicoController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\IyzicoController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::GaaRKRGT8KbClf4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4U56O0krwE6a4JgE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\JazzcashController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\JazzcashController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::4U56O0krwE6a4JgE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9eClvtmazUUCeXMy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mercadopago/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::9eClvtmazUUCeXMy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OBvQZllixaLO3Wod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mercadopago/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@pending',
        'controller' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@pending',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::OBvQZllixaLO3Wod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dy4OqLkYoHX5ATpk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mercadopago/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Dy4OqLkYoHX5ATpk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bZSHttYpeWaEFRLB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MollieController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\MollieController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::bZSHttYpeWaEFRLB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aP3Wc5ml0BvX0alk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MollieController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\MollieController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::aP3Wc5ml0BvX0alk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n53oPe30JYpWQsRo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/nowpayments/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@ipn',
        'controller' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@ipn',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::n53oPe30JYpWQsRo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SJRZ9vwo329hFKnz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/nowpayments/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::SJRZ9vwo329hFKnz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::umm9lyyn3geH9BTy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/nowpayments/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@cancel',
        'controller' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@cancel',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::umm9lyyn3geH9BTy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zyRSLyh2sGVeOGQY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaymobController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaymobController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::zyRSLyh2sGVeOGQY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bQo78KBxQ7Yotvce' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paymob-pk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaymobPkController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaymobPkController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::bQo78KBxQ7Yotvce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WHvK9tIZpRW5BlND' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaypalController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaypalController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::WHvK9tIZpRW5BlND',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CmMfryz6jTHRXtcJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaystackController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaystackController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::CmMfryz6jTHRXtcJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rnhWGSep3lx1jUqK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaystackController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaystackController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::rnhWGSep3lx1jUqK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8pGVpE3yK8onnUhz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytabsController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytabsController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::8pGVpE3yK8onnUhz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q6OikOxopVqwF9Zr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paytr/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytrController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytrController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::q6OikOxopVqwF9Zr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GWR09gT3OVdrAeom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paytr/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytrController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytrController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::GWR09gT3OVdrAeom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9wcPKHHApP2xahpv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytrController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytrController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::9wcPKHHApP2xahpv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gnCL0je3QwROLiJC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\RazorpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\RazorpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::gnCL0je3QwROLiJC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6vpgByhE8Iu56By' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/robokassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\RobokassaController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\RobokassaController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::x6vpgByhE8Iu56By',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ndw214pZlUk8bMDr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\StripeController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\StripeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::ndw214pZlUk8bMDr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UrEX5N4FSEoSmCsC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\VnpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\VnpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::UrEX5N4FSEoSmCsC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nXXZfv7P3v6VU9oX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/xendit/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\XenditController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\XenditController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::nXXZfv7P3v6VU9oX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4IJ9W3jS67VKJMGl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/xendit/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\XenditController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\XenditController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::4IJ9W3jS67VKJMGl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QbS1boMDUGLxd25I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\XenditController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\XenditController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::QbS1boMDUGLxd25I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wPG3I2ensJS2KnSB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\YoucanpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\YoucanpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::wPG3I2ensJS2KnSB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m9rpllobIAmAqU8Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restricted',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Livewire\\Restricted\\IndexComponent@__invoke',
        'controller' => 'App\\Livewire\\Restricted\\IndexComponent',
        'namespace' => 'App\\Livewire\\Restricted',
        'prefix' => '/restricted',
        'where' => 
        array (
        ),
        'as' => 'generated::m9rpllobIAmAqU8Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tinkaaXVoOzm41w8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Home\\HomeComponent',
        'namespace' => 'App\\Livewire\\Admin\\Home',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::tinkaaXVoOzm41w8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L6cpLryeFIX1Pj5h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Profile\\ProfileComponent',
        'namespace' => 'App\\Livewire\\Admin\\Profile',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::L6cpLryeFIX1Pj5h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A19N8FvFrgZ7CVe7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Auth\\LogoutComponent',
        'namespace' => 'App\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::A19N8FvFrgZ7CVe7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HTuQ4vunq1BYQXVm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Invoices\\InvoicesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Invoices\\InvoicesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Invoices',
        'prefix' => 'dashboard/invoices',
        'where' => 
        array (
        ),
        'as' => 'generated::HTuQ4vunq1BYQXVm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::exuL5IpZxLh5N1m8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\UsersComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\UsersComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::exuL5IpZxLh5N1m8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tUWFybYk2r1HFwwz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::tUWFybYk2r1HFwwz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uMa3AbklhXNExeaF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::uMa3AbklhXNExeaF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xkaBsPq8WvN6DovT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\Options\\DetailsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::xkaBsPq8WvN6DovT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IFAxvWUdWBMYzs0f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/message/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\Options\\MessageComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\Options\\MessageComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::IFAxvWUdWBMYzs0f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BOzTcm43CzA7dV0r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/restrict/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\Options\\RestrictComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\Options\\RestrictComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::BOzTcm43CzA7dV0r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fhC3Vi6TbAuL5tP5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users\\Transactions',
        'prefix' => 'dashboard/users/transactions',
        'where' => 
        array (
        ),
        'as' => 'generated::fhC3Vi6TbAuL5tP5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::peGQcEwwEfDQZpXH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Users\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Users\\Trash\\TrashComponent',
        'namespace' => 'App\\Livewire\\Admin\\Users\\Trash',
        'prefix' => 'dashboard/users/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::peGQcEwwEfDQZpXH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OaxFZ367fNUf1eHH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Levels\\LevelsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Levels\\LevelsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Levels',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::OaxFZ367fNUf1eHH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ciMGXlBd5yoWNu7L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Levels\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Levels\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::ciMGXlBd5yoWNu7L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HUljsGkmAN1FJYqZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Levels\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Levels\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::HUljsGkmAN1FJYqZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mu9XRX9aqYyO88hm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Levels\\Options\\DeleteComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Levels\\Options\\DeleteComponent',
        'namespace' => 'App\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::Mu9XRX9aqYyO88hm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y0kou129XfNzdlXc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Withdrawals',
        'prefix' => 'dashboard/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::y0kou129XfNzdlXc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tuEGSmjDBYuntojc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Gigs\\GigsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Gigs',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::tuEGSmjDBYuntojc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dpHUPRgIjVPql5ei' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::dpHUPRgIjVPql5ei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aSzwHhruJ99yigwy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::aSzwHhruJ99yigwy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EE7HJn1iLN0xZRkw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent',
        'namespace' => 'App\\Livewire\\Admin\\Gigs\\Trash',
        'prefix' => 'dashboard/gigs/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::EE7HJn1iLN0xZRkw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XCnnos08yBtyqPl6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/packages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Packages\\PackagesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Packages\\PackagesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Packages',
        'prefix' => 'dashboard/packages',
        'where' => 
        array (
        ),
        'as' => 'generated::XCnnos08yBtyqPl6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ffUu78mo3817Enpl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/packages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Packages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Packages\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Packages\\Options',
        'prefix' => 'dashboard/packages',
        'where' => 
        array (
        ),
        'as' => 'generated::ffUu78mo3817Enpl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qmcXlcXZdmENZKEc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/packages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Packages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Packages\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Packages\\Options',
        'prefix' => 'dashboard/packages',
        'where' => 
        array (
        ),
        'as' => 'generated::qmcXlcXZdmENZKEc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KqhuxKyiRXYY4BFp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Attributes\\AttributesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Attributes\\AttributesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Attributes',
        'prefix' => 'dashboard/attributes',
        'where' => 
        array (
        ),
        'as' => 'generated::KqhuxKyiRXYY4BFp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JPX9FLvtnT5BNYal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Attributes\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Attributes\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Attributes\\Options',
        'prefix' => 'dashboard/attributes',
        'where' => 
        array (
        ),
        'as' => 'generated::JPX9FLvtnT5BNYal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w28hjtZeza1kzBje' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/attributes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Attributes\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Attributes\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Attributes\\Options',
        'prefix' => 'dashboard/attributes',
        'where' => 
        array (
        ),
        'as' => 'generated::w28hjtZeza1kzBje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AcdnEF7cZkdoBs0E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Orders\\OrdersComponent',
        'namespace' => 'App\\Livewire\\Admin\\Orders',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::AcdnEF7cZkdoBs0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::26ATGxd7LEZdePrS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Orders\\Options',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::26ATGxd7LEZdePrS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ITWLf5PuCHrkDEhH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/portfolios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Portfolios\\PortfoliosComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Portfolios\\PortfoliosComponent',
        'namespace' => 'App\\Livewire\\Admin\\Portfolios',
        'prefix' => 'dashboard/portfolios',
        'where' => 
        array (
        ),
        'as' => 'generated::ITWLf5PuCHrkDEhH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::76Lr5dIaJX1ezvxb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Refunds',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::76Lr5dIaJX1ezvxb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NgOoO0wzjpbHuYt7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Refunds\\Options',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::NgOoO0wzjpbHuYt7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::weYibJFbP1kEZCCE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::weYibJFbP1kEZCCE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8EvLWWDjfHDKiTxD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\SettingsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\SettingsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::8EvLWWDjfHDKiTxD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fPhC8V5BCVuLyu5H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Milestones',
        'prefix' => 'dashboard/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::fPhC8V5BCVuLyu5H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QveM7ls3YrTLOLn1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Plans\\PlansComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Plans\\PlansComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::QveM7ls3YrTLOLn1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ETpZDpHCUtX9mvej' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Plans\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Plans\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::ETpZDpHCUtX9mvej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ko5UmJ24GZZ3XgnV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/bidding/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Plans\\Bidding',
        'prefix' => 'dashboard/projects/plans/bidding',
        'where' => 
        array (
        ),
        'as' => 'generated::Ko5UmJ24GZZ3XgnV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3FIKL84bW4jrBarK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Categories',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::3FIKL84bW4jrBarK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tIia5eUR5uLQ1YVm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::tIia5eUR5uLQ1YVm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BuoQFz0czgE8xH8B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::BuoQFz0czgE8xH8B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KPEeu5nVAOJcF7At' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Skills',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::KPEeu5nVAOJcF7At',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ggcDcw29X7HdnbhT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::ggcDcw29X7HdnbhT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k5O7igq7S207BBBS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::k5O7igq7S207BBBS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eqlloSZXjRoi35ND' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Subscriptions',
        'prefix' => 'dashboard/projects/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::eqlloSZXjRoi35ND',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nkcvhlkELYokJgjF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Bids',
        'prefix' => 'dashboard/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::nkcvhlkELYokJgjF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hxlIkGhSz7HMF4Ks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Projects\\Bids\\Subscriptions',
        'prefix' => 'dashboard/projects/bids/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::hxlIkGhSz7HMF4Ks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Oix8h4VZO2JtyQO3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Offers\\OffersComponent',
        'namespace' => 'App\\Livewire\\Admin\\Offers',
        'prefix' => 'dashboard/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::Oix8h4VZO2JtyQO3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ScIE2ZWUQun3Yx8C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Categories',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::ScIE2ZWUQun3Yx8C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aYs7S0kLIVLoTeLu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::aYs7S0kLIVLoTeLu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S2PWgBnr7Kg2w1Wz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::S2PWgBnr7Kg2w1Wz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rlojtf82lhbOrzoa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Categories\\Options\\DeleteComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Categories\\Options\\DeleteComponent',
        'namespace' => 'App\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::Rlojtf82lhbOrzoa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P2yCoJiKGhi7GOC7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Subcategories',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::P2yCoJiKGhi7GOC7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aeIPEN6HAQKGFE1m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::aeIPEN6HAQKGFE1m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fkfldcJXTmCmOLfK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Subcategories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Subcategories\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::fkfldcJXTmCmOLfK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ijOprUkzZ9la5RV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Subcategories\\Options\\DeleteComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Subcategories\\Options\\DeleteComponent',
        'namespace' => 'App\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::9ijOprUkzZ9la5RV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::599gFcRwr96TLbHM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/childcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Childcategories\\ChildcategoriesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Childcategories\\ChildcategoriesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Childcategories',
        'prefix' => 'dashboard/childcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::599gFcRwr96TLbHM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vomdD1qVmCZl7a2L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/childcategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Childcategories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Childcategories\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Childcategories\\Options',
        'prefix' => 'dashboard/childcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::vomdD1qVmCZl7a2L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kk6LUBAPvyFFId5X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/childcategories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Childcategories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Childcategories\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Childcategories\\Options',
        'prefix' => 'dashboard/childcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::Kk6LUBAPvyFFId5X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YwaEs94LyPX5NIFU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/childcategories/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Childcategories\\Options\\DeleteComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Childcategories\\Options\\DeleteComponent',
        'namespace' => 'App\\Livewire\\Admin\\Childcategories\\Options',
        'prefix' => 'dashboard/childcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::YwaEs94LyPX5NIFU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O0hUkYIFbECdFFwp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Reviews',
        'prefix' => 'dashboard/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::O0hUkYIFbECdFFwp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KB0MB5uHSVVntfHC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Reports\\UsersComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Reports\\UsersComponent',
        'namespace' => 'App\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::KB0MB5uHSVVntfHC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PKOKbdtxtwqCogAS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Reports\\GigsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Reports\\GigsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::PKOKbdtxtwqCogAS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::paJspppVLZWxnIf1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Reports\\ProjectsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Reports\\ProjectsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::paJspppVLZWxnIf1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nd1zZRdEWS2uv4X9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Reports\\BidsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Reports\\BidsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::nd1zZRdEWS2uv4X9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kyynU7hOrzfno7O7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/conversations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Conversations\\ConversationsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Conversations\\ConversationsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Conversations',
        'prefix' => 'dashboard/conversations',
        'where' => 
        array (
        ),
        'as' => 'generated::kyynU7hOrzfno7O7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oQsLBiT9gMor5UVg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/advertisements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Advertisements',
        'prefix' => 'dashboard/advertisements',
        'where' => 
        array (
        ),
        'as' => 'generated::oQsLBiT9gMor5UVg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Haln0NImblylxPpA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Support\\SupportComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Support\\SupportComponent',
        'namespace' => 'App\\Livewire\\Admin\\Support',
        'prefix' => 'dashboard/support',
        'where' => 
        array (
        ),
        'as' => 'generated::Haln0NImblylxPpA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h0a9IUZinCHW4JDf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/support/reply/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Support\\ReplyComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Support\\ReplyComponent',
        'namespace' => 'App\\Livewire\\Admin\\Support',
        'prefix' => 'dashboard/support',
        'where' => 
        array (
        ),
        'as' => 'generated::h0a9IUZinCHW4JDf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HZFOE2p1LFrppFxm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Newsletter\\NewsletterComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Newsletter\\NewsletterComponent',
        'namespace' => 'App\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::HZFOE2p1LFrppFxm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JwimJuzNIPcuXiU7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Newsletter\\SettingsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Newsletter\\SettingsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::JwimJuzNIPcuXiU7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HjyFPAWnQc7u9DPx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter/send/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Newsletter\\SendComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Newsletter\\SendComponent',
        'namespace' => 'App\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::HjyFPAWnQc7u9DPx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1MNGlS9ztiufPyu8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Languages\\LanguagesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Languages\\LanguagesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Languages',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::1MNGlS9ztiufPyu8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jEkY7P6oyVIM4MeK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Languages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Languages\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::jEkY7P6oyVIM4MeK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3phm2OkMFIGGJj5G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Languages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Languages\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::3phm2OkMFIGGJj5G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kJrVXEcDNvphDBL4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/translate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Languages\\Options\\TranslateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Languages\\Options\\TranslateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::kJrVXEcDNvphDBL4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d4fe2vtwf3XGglaP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Pages\\PagesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Pages\\PagesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Pages',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::d4fe2vtwf3XGglaP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::05BQt2hFNZ00w7tV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Pages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Pages\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::05BQt2hFNZ00w7tV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x4QjobCS3efvzlSG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Pages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Pages\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::x4QjobCS3efvzlSG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SeTkhraHCAiJLiqj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Countries\\CountriesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Countries\\CountriesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Countries',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::SeTkhraHCAiJLiqj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XLKOQqSlT1a5syax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Countries\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Countries\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::XLKOQqSlT1a5syax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d0XvuPXFYSxnMgPR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Countries\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Countries\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::d0XvuPXFYSxnMgPR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yOIuShhRyEXR8D3U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\PaymentComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\PaymentComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::yOIuShhRyEXR8D3U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pz6vIGQuNKCqqxK4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/iyzico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\IyzicoComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\IyzicoComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::Pz6vIGQuNKCqqxK4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x3J34c9nctRWukla' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/duitku',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\DuitkuComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\DuitkuComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::x3J34c9nctRWukla',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r0B5WJlil8pyPrtX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/genie-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\GenieComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\GenieComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::r0B5WJlil8pyPrtX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bxNpgI44daSgxmO8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/asaas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\AsaasComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\AsaasComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::bxNpgI44daSgxmO8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LHGmp8oyvW5bX5xM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/ecpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\EcpayComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\EcpayComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::LHGmp8oyvW5bX5xM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hk04BIJ5IZOvQ7fD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/fastpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\FastpayComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\FastpayComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::hk04BIJ5IZOvQ7fD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::deJrE9UyJkn1BI0e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/freekassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\FreekassaComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\FreekassaComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::deJrE9UyJkn1BI0e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nb3TQ3K83Jtn8Z4r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paymob-pk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobPkComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobPkComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::nb3TQ3K83Jtn8Z4r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CxMKUYlejXwzuEHz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/cpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\CpayComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\CpayComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::CxMKUYlejXwzuEHz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Ae8G1VdVRJjeV8Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/nowpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\NowpaymentsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\NowpaymentsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::8Ae8G1VdVRJjeV8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WUgdEtLRTfTi6Nt1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaypalComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaypalComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::WUgdEtLRTfTi6Nt1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fDxeEV9o6Ke910dV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\StripeComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\StripeComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::fDxeEV9o6Ke910dV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mLQArmZIbMkPuhQg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaystackComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaystackComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::mLQArmZIbMkPuhQg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mbxa7usBRQfW2VBk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\CashfreeComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\CashfreeComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::mbxa7usBRQfW2VBk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0DoVdDGc9LgJLUMC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\XenditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\XenditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::0DoVdDGc9LgJLUMC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uszbRjerfrTcZh3i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\FlutterwaveComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\FlutterwaveComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::uszbRjerfrTcZh3i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GMudLumJZzY6FTMK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\VnpayComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\VnpayComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::GMudLumJZzY6FTMK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aMNXcjuzmLsehndp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::aMNXcjuzmLsehndp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IBncJXB4a7bMgzUB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\MercadopagoComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\MercadopagoComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::IBncJXB4a7bMgzUB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7jOKYjdar0TqOEiN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytabsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytabsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::7jOKYjdar0TqOEiN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h4mm0uKtStMLKtEl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\RazorpayComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\RazorpayComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::h4mm0uKtStMLKtEl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5wC2NgWko4ZzK2EE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\MollieComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\MollieComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::5wC2NgWko4ZzK2EE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TVVIHN77G8ZeN9dh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytrComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytrComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::TVVIHN77G8ZeN9dh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5DWeT4pGOO677LO3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\JazzcashComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\JazzcashComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::5DWeT4pGOO677LO3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vF9eCw3qa0RrWEyU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\YoucanpayComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\YoucanpayComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::vF9eCw3qa0RrWEyU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dMiTq0WHwe8vI7g7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/epoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\EpointComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\EpointComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::dMiTq0WHwe8vI7g7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K8MXXBBAUneSJMqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/campay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\CampayComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\CampayComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::K8MXXBBAUneSJMqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r6ZgwPFOLwDnSo2X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/robokassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\RobokassaComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\RobokassaComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::r6ZgwPFOLwDnSo2X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::63Vot6poSpQimLDX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\OfflineComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways\\OfflineComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::63Vot6poSpQimLDX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yVKEKGpiYESt2fik' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cloud',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Cloud\\IndexComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Cloud\\IndexComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Cloud',
        'prefix' => 'dashboard/services/cloud',
        'where' => 
        array (
        ),
        'as' => 'generated::yVKEKGpiYESt2fik',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XoXBAO9EZXACYGoK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cloud/amazon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Cloud\\AmazonComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Cloud\\AmazonComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Cloud',
        'prefix' => 'dashboard/services/cloud',
        'where' => 
        array (
        ),
        'as' => 'generated::XoXBAO9EZXACYGoK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GXaRy2CTUBYTk0p0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cloud/wasabi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Cloud\\WasabiComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Cloud\\WasabiComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Cloud',
        'prefix' => 'dashboard/services/cloud',
        'where' => 
        array (
        ),
        'as' => 'generated::GXaRy2CTUBYTk0p0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lmUCMPmdqS93jxYh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cloud/cloudinary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\Cloud\\CloudinaryComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\Cloud\\CloudinaryComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services\\Cloud',
        'prefix' => 'dashboard/services/cloud',
        'where' => 
        array (
        ),
        'as' => 'generated::lmUCMPmdqS93jxYh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cSOtGKky3KA0BiUI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/recaptcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\RecaptchaComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\RecaptchaComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::cSOtGKky3KA0BiUI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dfZQ0dDhnr0ecUFN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/findip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Services\\FindipComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Services\\FindipComponent',
        'namespace' => 'App\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::dfZQ0dDhnr0ecUFN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zDb6XmXVk4L1QmCQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\GeneralComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\GeneralComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::zDb6XmXVk4L1QmCQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::24SzBHHsgFDGN22v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\CurrencyComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\CurrencyComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::24SzBHHsgFDGN22v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6YPjq1UKw0qWJu4H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\AuthComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\AuthComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::6YPjq1UKw0qWJu4H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cX49Rz64qQQvJpyx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\CommissionComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\CommissionComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::cX49Rz64qQQvJpyx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cf1THU4nh77nvkgt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\FooterComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\FooterComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::cf1THU4nh77nvkgt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7vvLHjFogAMHJOq0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\MediaComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\MediaComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::7vvLHjFogAMHJOq0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XK7IzqQF7l9MjnL7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\PublishComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\PublishComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::XK7IzqQF7l9MjnL7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U7ERTNg8nAH86uQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\SecurityComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\SecurityComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::U7ERTNg8nAH86uQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NajnG1lAiMxH24ZS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\SeoComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\SeoComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::NajnG1lAiMxH24ZS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tz8gYZeF7QlWRouB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\SmtpComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\SmtpComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Tz8gYZeF7QlWRouB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J7dNg037r4EeFpMC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/withdrawal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\WithdrawalComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\WithdrawalComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::J7dNg037r4EeFpMC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U18Zsk28pDiHnuO9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\AppearanceComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\AppearanceComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::U18Zsk28pDiHnuO9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vAe7IWyzyYZWyODH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/hero',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\HeroComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\HeroComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::vAe7IWyzyYZWyODH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KEnIgd2yA8R5R6sR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Settings\\ChatComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Settings\\ChatComponent',
        'namespace' => 'App\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::KEnIgd2yA8R5R6sR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kmLJQghwWVxHzmYV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/verifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Verifications\\VerificationsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Verifications\\VerificationsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Verifications',
        'prefix' => 'dashboard/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::kmLJQghwWVxHzmYV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J2DNuEYFDf7YJpay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Blog\\ArticlesComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Blog\\ArticlesComponent',
        'namespace' => 'App\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::J2DNuEYFDf7YJpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cy1cy0ZNh91qDxn3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Blog\\SettingsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Blog\\SettingsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::Cy1cy0ZNh91qDxn3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6wS4Li3zPEX13DE5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent',
        'namespace' => 'App\\Livewire\\Admin\\Blog\\Comments',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::6wS4Li3zPEX13DE5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cy69As5c85ulo7n1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Blog\\Comments\\Options',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::cy69As5c85ulo7n1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KyFLuDtnGlxHiwYl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Blog\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Blog\\Options\\CreateComponent',
        'namespace' => 'App\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::KyFLuDtnGlxHiwYl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ffrJAOf4FzgdRwYe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Blog\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Blog\\Options\\EditComponent',
        'namespace' => 'App\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::ffrJAOf4FzgdRwYe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HMC85gatKdkDYIAY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/crontab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\System\\CrontabComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\System\\CrontabComponent',
        'namespace' => 'App\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::HMC85gatKdkDYIAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KtixsPVCJlgNqShq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\System\\CacheComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\System\\CacheComponent',
        'namespace' => 'App\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::KtixsPVCJlgNqShq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::duzNDHs7tZvXAvs4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\System\\MaintenanceComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\System\\MaintenanceComponent',
        'namespace' => 'App\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::duzNDHs7tZvXAvs4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KfoL8lE3rHgZ8cqw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\System\\ResetComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\System\\ResetComponent',
        'namespace' => 'App\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::KfoL8lE3rHgZ8cqw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4CS2i5dBRSY9YAZu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/licensing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\System\\LicensingComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\System\\LicensingComponent',
        'namespace' => 'App\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::4CS2i5dBRSY9YAZu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IqIgcKuEoSohA7cl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'banned.ip',
          2 => 'guest:admin',
        ),
        'uses' => 'App\\Livewire\\Admin\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Livewire\\Admin\\Auth\\LoginComponent',
        'namespace' => 'App\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::IqIgcKuEoSohA7cl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
