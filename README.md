# PHP-Toggl
PHP library for the [Toggl Timetracker](https://toggl.com)  API (v8)

## Getting Started
### Composer (recommended)
`composer require ggdx/php-toggl`

### Download
Download the zip or `git clone git@github.com:ggdx/php-toggl.git`
**Dependencies:** PHP >= 5.5.9 and [Guzzle](https://github.com/guzzle/guzzle) >=6.2

### Example:
```php
$toggl = new Toggl($api_key)
$toggl->startTimer($data);
```


## Methods
### Clients
```php
getClients($id)
```
```php
getClientProjects($id)
```
```php
saveClient($id, $data)
```
```php
deleteClient($id)
```

### Dashboard
```php
getDashboard($workspace_id)
```

### Me
```php
getMe()
```
```php
saveMe($data)
```
```php
resetApiKey()
```

### Projects
```php
getProject($id)
```
```php
getProjectTasks($id)
```
```php
saveProject($id, $data)
```
```php
deleteProject($id)
```
```php
getProjectUsers($project_id)
```
```php
saveProjectUser($id, $data)
```
```php
deleteProjectUser($id)
```

### Tags
```php
saveTag($id, $data)
```
```php
deleteTag($id)
```

### Tasks
```php
getTask($id)
```
```php
saveTask($id, $data)
```
```php
deleteTask($id)
```

### Time Entries
```php
getTimeEntry($id)
```
```php
getTimer()
```
```php
saveTimeEntry($id, $data, $start_timer)
```
```php
startTimer($data)
```
```php
stopTimer($id)
```

### Users
```php
createUser($data)
```

### Workspaces
```php
getWorkspaces($id)
```
```php
getWorkspaceUsers($id)
```
```php
getWorkspaceClients($id)
```
```php
getWorkspaceProjects($id)
```
```php
getWorkspaceTasks($id)
```
```php
getWorkspaceTags($id)
```
```php
updateWorkspace($id, $data)
```

### Workspace Users
```php
inviteUsers($id, $email)
```
```php
deleteWorkspaceUser($id)
```

## More info
Full documentation will be up here shortly; but for now, all methods are fully documented within the code.
