<?php namespace GGDX\PhpToggl;

class Toggl{

    use Traits\Clients;
    use Traits\Dashboard;
    use Traits\Projects;
    use Traits\ProjectUsers;
    use Traits\Tags;
    use Traits\Tasks;
    use Traits\TimeEntries;
    use Traits\Users;
    use Traits\Workspaces;
    use Traits\WorkspaceUsers;


    private $request, $api_version;

    public $error = [];


    /**
     * Initialise the Toggl class
     *
     * @param string $api_key
     * @param string $api_version
     * @return void
     */
    public function __construct($api_key = false, $api_version = false)
    {
        if(!$api_key){
            throw new Exception('Toggl API key required');
        }
        $this->request = new Request($api_key);

        $this->api_version = !$api_version ? 'v8' : $api_version;
    }

    /**
     * Send the request
     *
     * @param string $http_method - REST('get','post','put','delete')
     * @param string $endpoint
     * @param array $data
     * @return mixed
     */

    public function call($http_method = false, $endpoint = false, array $data = [])
    {
        if(!$http_method){
            $this->set_error(__FUNCTION__.'() - $http_method is required');
        }

        if(!$endpoint){
            $this->set_error(__FUNCTION__.'() - $endpoint is required');
        }

        if(count($this->error)){
            return $this->error;
        }

        $endpoint = 'api/'.$this->api_version.'/'.$endpoint;

        return !count($data) ? $this->request->$http_method($endpoint) : $this->request->$http_method($endpoint, $data);
    }
}
