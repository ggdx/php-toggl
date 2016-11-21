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
`getClients($id)`
`getClientProjects($id)`
`saveClient($id, $data)`
`deleteClient($id)`

### Dashboard
`getDashboard($workspace_id)`

### Me
`getMe()`
`saveMe($data)`
`resetApiKey()`

### Projects
`getProject($id)`
`getProjectTasks($id)`
`saveProject($id, $data)`
`deleteProject($id)`
`getProjectUsers($project_id)`
`saveProjectUser($id, $data)`
`deleteProjectUser($id)`

### Tags
`saveTag($id, $data)`
`deleteTag($id)`

### Tasks
`getTask($id)`
`saveTask($id, $data)`
`deleteTask($id)`

### Time Entries
`getTimeEntry($id)`
`getTimer()`
`saveTimeEntry($id, $data, $start_timer)`
`startTimer($data)`
`stopTimer($id)`

### Users
`createUser($data)`

### Workspaces
`getWorkspaces($id)`
`getWorkspaceUsers($id)`
`getWorkspaceClients($id)`
`getWorkspaceProjects($id)`
`getWorkspaceTasks($id)`
`getWorkspaceTags($id)`
`updateWorkspace($id, $data)`

### Workspace Users
`inviteUsers($id, $email)`
`deleteWorkspaceUser($id)`

## More info
Full documentation will be up here shortly; but for now, all methods are fully documented within the code.
