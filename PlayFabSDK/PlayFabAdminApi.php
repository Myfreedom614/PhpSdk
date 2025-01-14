<?php
include 'PlayFabHttp.php';

class PlayFabAdminApi
{
    /// <summary>
    /// Abort an ongoing task instance.
    /// https://api.playfab.com/Documentation/Admin/method/AbortTaskInstance
    /// </summary>
    public static function AbortTaskInstance($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AbortTaskInstance", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Update news item to include localized version
    /// https://api.playfab.com/Documentation/Admin/method/AddLocalizedNews
    /// </summary>
    public static function AddLocalizedNews($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddLocalizedNews", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds a new news item to the title's news feed
    /// https://api.playfab.com/Documentation/Admin/method/AddNews
    /// </summary>
    public static function AddNews($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddNews", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds a given tag to a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://api.playfab.com/Documentation/Admin/method/AddPlayerTag
    /// </summary>
    public static function AddPlayerTag($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddPlayerTag", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the game server executable specified (previously uploaded - see GetServerBuildUploadUrl) to the set of those a
    /// client is permitted to request in a call to StartGame
    /// https://api.playfab.com/Documentation/Admin/method/AddServerBuild
    /// </summary>
    public static function AddServerBuild($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddServerBuild", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Increments the specified virtual currency by the stated amount
    /// https://api.playfab.com/Documentation/Admin/method/AddUserVirtualCurrency
    /// </summary>
    public static function AddUserVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddUserVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds one or more virtual currencies to the set defined for the title. Virtual Currencies have a maximum value of
    /// 2,147,483,647 when granted to a player. Any value over that will be discarded.
    /// https://api.playfab.com/Documentation/Admin/method/AddVirtualCurrencyTypes
    /// </summary>
    public static function AddVirtualCurrencyTypes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddVirtualCurrencyTypes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Bans users by PlayFab ID with optional IP address, or MAC address for the provided game.
    /// https://api.playfab.com/Documentation/Admin/method/BanUsers
    /// </summary>
    public static function BanUsers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/BanUsers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Checks the global count for the limited edition item.
    /// https://api.playfab.com/Documentation/Admin/method/CheckLimitedEditionItemAvailability
    /// </summary>
    public static function CheckLimitedEditionItemAvailability($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CheckLimitedEditionItemAvailability", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Create an ActionsOnPlayersInSegment task, which iterates through all players in a segment to execute action.
    /// https://api.playfab.com/Documentation/Admin/method/CreateActionsOnPlayersInSegmentTask
    /// </summary>
    public static function CreateActionsOnPlayersInSegmentTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreateActionsOnPlayersInSegmentTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Create a CloudScript task, which can run a CloudScript on a schedule.
    /// https://api.playfab.com/Documentation/Admin/method/CreateCloudScriptTask
    /// </summary>
    public static function CreateCloudScriptTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreateCloudScriptTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Registers a relationship between a title and an Open ID Connect provider.
    /// https://api.playfab.com/Documentation/Admin/method/CreateOpenIdConnection
    /// </summary>
    public static function CreateOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreateOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates a new Player Shared Secret Key. It may take up to 5 minutes for this key to become generally available after
    /// this API returns.
    /// https://api.playfab.com/Documentation/Admin/method/CreatePlayerSharedSecret
    /// </summary>
    public static function CreatePlayerSharedSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreatePlayerSharedSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds a new player statistic configuration to the title, optionally allowing the developer to specify a reset interval
    /// and an aggregation method.
    /// https://api.playfab.com/Documentation/Admin/method/CreatePlayerStatisticDefinition
    /// </summary>
    public static function CreatePlayerStatisticDefinition($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreatePlayerStatisticDefinition", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Delete a content file from the title. When deleting a file that does not exist, it returns success.
    /// https://api.playfab.com/Documentation/Admin/method/DeleteContent
    /// </summary>
    public static function DeleteContent($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteContent", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes a master player account entirely from all titles and deletes all associated data
    /// https://api.playfab.com/Documentation/Admin/method/DeleteMasterPlayerAccount
    /// </summary>
    public static function DeleteMasterPlayerAccount($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteMasterPlayerAccount", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes a relationship between a title and an OpenID Connect provider.
    /// https://api.playfab.com/Documentation/Admin/method/DeleteOpenIdConnection
    /// </summary>
    public static function DeleteOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes a user's player account from a title and deletes all associated data
    /// https://api.playfab.com/Documentation/Admin/method/DeletePlayer
    /// </summary>
    public static function DeletePlayer($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeletePlayer", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Deletes an existing Player Shared Secret Key. It may take up to 5 minutes for this delete to be reflected after this API
    /// returns.
    /// https://api.playfab.com/Documentation/Admin/method/DeletePlayerSharedSecret
    /// </summary>
    public static function DeletePlayerSharedSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeletePlayerSharedSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Deletes an existing virtual item store
    /// https://api.playfab.com/Documentation/Admin/method/DeleteStore
    /// </summary>
    public static function DeleteStore($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteStore", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Delete a task.
    /// https://api.playfab.com/Documentation/Admin/method/DeleteTask
    /// </summary>
    public static function DeleteTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Permanently deletes a title and all associated configuration
    /// https://api.playfab.com/Documentation/Admin/method/DeleteTitle
    /// </summary>
    public static function DeleteTitle($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteTitle", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Exports all associated data of a master player account
    /// https://api.playfab.com/Documentation/Admin/method/ExportMasterPlayerData
    /// </summary>
    public static function ExportMasterPlayerData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ExportMasterPlayerData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get information about a ActionsOnPlayersInSegment task instance.
    /// https://api.playfab.com/Documentation/Admin/method/GetActionsOnPlayersInSegmentTaskInstance
    /// </summary>
    public static function GetActionsOnPlayersInSegmentTaskInstance($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetActionsOnPlayersInSegmentTaskInstance", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves an array of player segment definitions. Results from this can be used in subsequent API calls such as
    /// GetPlayersInSegment which requires a Segment ID. While segment names can change the ID for that segment will not change.
    /// https://api.playfab.com/Documentation/Admin/method/GetAllSegments
    /// </summary>
    public static function GetAllSegments($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetAllSegments", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified version of the title's catalog of virtual goods, including all defined properties
    /// https://api.playfab.com/Documentation/Admin/method/GetCatalogItems
    /// </summary>
    public static function GetCatalogItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCatalogItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets the contents and information of a specific Cloud Script revision.
    /// https://api.playfab.com/Documentation/Admin/method/GetCloudScriptRevision
    /// </summary>
    public static function GetCloudScriptRevision($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCloudScriptRevision", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get detail information about a CloudScript task instance.
    /// https://api.playfab.com/Documentation/Admin/method/GetCloudScriptTaskInstance
    /// </summary>
    public static function GetCloudScriptTaskInstance($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCloudScriptTaskInstance", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Lists all the current cloud script versions. For each version, information about the current published and latest
    /// revisions is also listed.
    /// https://api.playfab.com/Documentation/Admin/method/GetCloudScriptVersions
    /// </summary>
    public static function GetCloudScriptVersions($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCloudScriptVersions", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// List all contents of the title and get statistics such as size
    /// https://api.playfab.com/Documentation/Admin/method/GetContentList
    /// </summary>
    public static function GetContentList($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetContentList", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the pre-signed URL for uploading a content file. A subsequent HTTP PUT to the returned URL uploads the
    /// content. Also, please be aware that the Content service is specifically PlayFab's CDN offering, for which standard CDN
    /// rates apply.
    /// https://api.playfab.com/Documentation/Admin/method/GetContentUploadUrl
    /// </summary>
    public static function GetContentUploadUrl($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetContentUploadUrl", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a download URL for the requested report
    /// https://api.playfab.com/Documentation/Admin/method/GetDataReport
    /// </summary>
    public static function GetDataReport($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetDataReport", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the details for a specific completed session, including links to standard out and standard error logs
    /// https://api.playfab.com/Documentation/Admin/method/GetMatchmakerGameInfo
    /// </summary>
    public static function GetMatchmakerGameInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetMatchmakerGameInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the details of defined game modes for the specified game server executable
    /// https://api.playfab.com/Documentation/Admin/method/GetMatchmakerGameModes
    /// </summary>
    public static function GetMatchmakerGameModes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetMatchmakerGameModes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get the list of titles that the player has played
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayedTitleList
    /// </summary>
    public static function GetPlayedTitleList($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayedTitleList", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets a player's ID from an auth token.
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayerIdFromAuthToken
    /// </summary>
    public static function GetPlayerIdFromAuthToken($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerIdFromAuthToken", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the player's profile
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayerProfile
    /// </summary>
    public static function GetPlayerProfile($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerProfile", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// List all segments that a player currently belongs to at this moment in time.
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayerSegments
    /// </summary>
    public static function GetPlayerSegments($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerSegments", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Returns all Player Shared Secret Keys including disabled and expired.
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayerSharedSecrets
    /// </summary>
    public static function GetPlayerSharedSecrets($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerSharedSecrets", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Allows for paging through all players in a given segment. This API creates a snapshot of all player profiles that match
    /// the segment definition at the time of its creation and lives through the Total Seconds to Live, refreshing its life span
    /// on each subsequent use of the Continuation Token. Profiles that change during the course of paging will not be reflected
    /// in the results. AB Test segments are currently not supported by this operation. NOTE: This API is limited to being
    /// called 30 times in one minute. You will be returned an error if you exceed this threshold.
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayersInSegment
    /// </summary>
    public static function GetPlayersInSegment($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayersInSegment", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the configuration information for all player statistics defined in the title, regardless of whether they have
    /// a reset interval.
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayerStatisticDefinitions
    /// </summary>
    public static function GetPlayerStatisticDefinitions($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerStatisticDefinitions", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the information on the available versions of the specified statistic.
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayerStatisticVersions
    /// </summary>
    public static function GetPlayerStatisticVersions($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerStatisticVersions", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get all tags with a given Namespace (optional) from a player profile.
    /// https://api.playfab.com/Documentation/Admin/method/GetPlayerTags
    /// </summary>
    public static function GetPlayerTags($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerTags", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets the requested policy.
    /// https://api.playfab.com/Documentation/Admin/method/GetPolicy
    /// </summary>
    public static function GetPolicy($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPolicy", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom publisher settings
    /// https://api.playfab.com/Documentation/Admin/method/GetPublisherData
    /// </summary>
    public static function GetPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the random drop table configuration for the title
    /// https://api.playfab.com/Documentation/Admin/method/GetRandomResultTables
    /// </summary>
    public static function GetRandomResultTables($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetRandomResultTables", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the build details for the specified game server executable
    /// https://api.playfab.com/Documentation/Admin/method/GetServerBuildInfo
    /// </summary>
    public static function GetServerBuildInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetServerBuildInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the pre-authorized URL for uploading a game server package containing a build (does not enable the build for
    /// use - see AddServerBuild)
    /// https://api.playfab.com/Documentation/Admin/method/GetServerBuildUploadUrl
    /// </summary>
    public static function GetServerBuildUploadUrl($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetServerBuildUploadUrl", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the set of items defined for the specified store, including all prices defined
    /// https://api.playfab.com/Documentation/Admin/method/GetStoreItems
    /// </summary>
    public static function GetStoreItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetStoreItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Query for task instances by task, status, or time range.
    /// https://api.playfab.com/Documentation/Admin/method/GetTaskInstances
    /// </summary>
    public static function GetTaskInstances($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTaskInstances", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get definition information on a specified task or all tasks within a title.
    /// https://api.playfab.com/Documentation/Admin/method/GetTasks
    /// </summary>
    public static function GetTasks($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTasks", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom title settings which can be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetTitleData
    /// </summary>
    public static function GetTitleData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTitleData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom title settings which cannot be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetTitleInternalData
    /// </summary>
    public static function GetTitleInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTitleInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the relevant details for a specified user, based upon a match against a supplied unique identifier
    /// https://api.playfab.com/Documentation/Admin/method/GetUserAccountInfo
    /// </summary>
    public static function GetUserAccountInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserAccountInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets all bans for a user.
    /// https://api.playfab.com/Documentation/Admin/method/GetUserBans
    /// </summary>
    public static function GetUserBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetUserData
    /// </summary>
    public static function GetUserData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetUserInternalData
    /// </summary>
    public static function GetUserInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified user's current inventory of virtual goods
    /// https://api.playfab.com/Documentation/Admin/method/GetUserInventory
    /// </summary>
    public static function GetUserInventory($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserInventory", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetUserPublisherData
    /// </summary>
    public static function GetUserPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetUserPublisherInternalData
    /// </summary>
    public static function GetUserPublisherInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserPublisherInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetUserPublisherReadOnlyData
    /// </summary>
    public static function GetUserPublisherReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserPublisherReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/GetUserReadOnlyData
    /// </summary>
    public static function GetUserReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified user inventories
    /// https://api.playfab.com/Documentation/Admin/method/GrantItemsToUsers
    /// </summary>
    public static function GrantItemsToUsers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GrantItemsToUsers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Increases the global count for the given scarce resource.
    /// https://api.playfab.com/Documentation/Admin/method/IncrementLimitedEditionItemAvailability
    /// </summary>
    public static function IncrementLimitedEditionItemAvailability($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/IncrementLimitedEditionItemAvailability", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Resets the indicated statistic, removing all player entries for it and backing up the old values.
    /// https://api.playfab.com/Documentation/Admin/method/IncrementPlayerStatisticVersion
    /// </summary>
    public static function IncrementPlayerStatisticVersion($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/IncrementPlayerStatisticVersion", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of all Open ID Connect providers registered to a title.
    /// https://api.playfab.com/Documentation/Admin/method/ListOpenIdConnection
    /// </summary>
    public static function ListOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ListOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the build details for all game server executables which are currently defined for the title
    /// https://api.playfab.com/Documentation/Admin/method/ListServerBuilds
    /// </summary>
    public static function ListServerBuilds($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ListServerBuilds", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retuns the list of all defined virtual currencies for the title
    /// https://api.playfab.com/Documentation/Admin/method/ListVirtualCurrencyTypes
    /// </summary>
    public static function ListVirtualCurrencyTypes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ListVirtualCurrencyTypes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the game server mode details for the specified game server executable
    /// https://api.playfab.com/Documentation/Admin/method/ModifyMatchmakerGameModes
    /// </summary>
    public static function ModifyMatchmakerGameModes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ModifyMatchmakerGameModes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the build details for the specified game server executable
    /// https://api.playfab.com/Documentation/Admin/method/ModifyServerBuild
    /// </summary>
    public static function ModifyServerBuild($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ModifyServerBuild", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Attempts to process an order refund through the original real money payment provider.
    /// https://api.playfab.com/Documentation/Admin/method/RefundPurchase
    /// </summary>
    public static function RefundPurchase($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RefundPurchase", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Remove a given tag from a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://api.playfab.com/Documentation/Admin/method/RemovePlayerTag
    /// </summary>
    public static function RemovePlayerTag($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RemovePlayerTag", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes the game server executable specified from the set of those a client is permitted to request in a call to
    /// StartGame
    /// https://api.playfab.com/Documentation/Admin/method/RemoveServerBuild
    /// </summary>
    public static function RemoveServerBuild($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RemoveServerBuild", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes one or more virtual currencies from the set defined for the title.
    /// https://api.playfab.com/Documentation/Admin/method/RemoveVirtualCurrencyTypes
    /// </summary>
    public static function RemoveVirtualCurrencyTypes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RemoveVirtualCurrencyTypes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Completely removes all statistics for the specified character, for the current game
    /// https://api.playfab.com/Documentation/Admin/method/ResetCharacterStatistics
    /// </summary>
    public static function ResetCharacterStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResetCharacterStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Reset a player's password for a given title.
    /// https://api.playfab.com/Documentation/Admin/method/ResetPassword
    /// </summary>
    public static function ResetPassword($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResetPassword", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Completely removes all statistics for the specified user, for the current game
    /// https://api.playfab.com/Documentation/Admin/method/ResetUserStatistics
    /// </summary>
    public static function ResetUserStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResetUserStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Attempts to resolve a dispute with the original order's payment provider.
    /// https://api.playfab.com/Documentation/Admin/method/ResolvePurchaseDispute
    /// </summary>
    public static function ResolvePurchaseDispute($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResolvePurchaseDispute", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans for a user.
    /// https://api.playfab.com/Documentation/Admin/method/RevokeAllBansForUser
    /// </summary>
    public static function RevokeAllBansForUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeAllBansForUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans specified with BanId.
    /// https://api.playfab.com/Documentation/Admin/method/RevokeBans
    /// </summary>
    public static function RevokeBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revokes access to an item in a user's inventory
    /// https://api.playfab.com/Documentation/Admin/method/RevokeInventoryItem
    /// </summary>
    public static function RevokeInventoryItem($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeInventoryItem", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revokes access for up to 25 items across multiple users and characters.
    /// https://api.playfab.com/Documentation/Admin/method/RevokeInventoryItems
    /// </summary>
    public static function RevokeInventoryItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeInventoryItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Run a task immediately regardless of its schedule.
    /// https://api.playfab.com/Documentation/Admin/method/RunTask
    /// </summary>
    public static function RunTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RunTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Forces an email to be sent to the registered email address for the user's account, with a link allowing the user to
    /// change the password.If an account recovery email template ID is provided, an email using the custom email template will
    /// be used.
    /// https://api.playfab.com/Documentation/Admin/method/SendAccountRecoveryEmail
    /// </summary>
    public static function SendAccountRecoveryEmail($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SendAccountRecoveryEmail", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates the catalog configuration of all virtual goods for the specified catalog version
    /// https://api.playfab.com/Documentation/Admin/method/SetCatalogItems
    /// </summary>
    public static function SetCatalogItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetCatalogItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets or resets the player's secret. Player secrets are used to sign API requests.
    /// https://api.playfab.com/Documentation/Admin/method/SetPlayerSecret
    /// </summary>
    public static function SetPlayerSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetPlayerSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets the currently published revision of a title Cloud Script
    /// https://api.playfab.com/Documentation/Admin/method/SetPublishedRevision
    /// </summary>
    public static function SetPublishedRevision($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetPublishedRevision", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom publisher settings
    /// https://api.playfab.com/Documentation/Admin/method/SetPublisherData
    /// </summary>
    public static function SetPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets all the items in one virtual store
    /// https://api.playfab.com/Documentation/Admin/method/SetStoreItems
    /// </summary>
    public static function SetStoreItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetStoreItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates and updates the key-value store of custom title settings which can be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/SetTitleData
    /// </summary>
    public static function SetTitleData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetTitleData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom title settings which cannot be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/SetTitleInternalData
    /// </summary>
    public static function SetTitleInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetTitleInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets the Amazon Resource Name (ARN) for iOS and Android push notifications. Documentation on the exact restrictions can
    /// be found at: http://docs.aws.amazon.com/sns/latest/api/API_CreatePlatformApplication.html. Currently, Amazon device
    /// Messaging is not supported.
    /// https://api.playfab.com/Documentation/Admin/method/SetupPushNotification
    /// </summary>
    public static function SetupPushNotification($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetupPushNotification", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Decrements the specified virtual currency by the stated amount
    /// https://api.playfab.com/Documentation/Admin/method/SubtractUserVirtualCurrency
    /// </summary>
    public static function SubtractUserVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SubtractUserVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates information of a list of existing bans specified with Ban Ids.
    /// https://api.playfab.com/Documentation/Admin/method/UpdateBans
    /// </summary>
    public static function UpdateBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the catalog configuration for virtual goods in the specified catalog version
    /// https://api.playfab.com/Documentation/Admin/method/UpdateCatalogItems
    /// </summary>
    public static function UpdateCatalogItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateCatalogItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates a new Cloud Script revision and uploads source code to it. Note that at this time, only one file should be
    /// submitted in the revision.
    /// https://api.playfab.com/Documentation/Admin/method/UpdateCloudScript
    /// </summary>
    public static function UpdateCloudScript($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateCloudScript", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Modifies data and credentials for an existing relationship between a title and an Open ID Connect provider
    /// https://api.playfab.com/Documentation/Admin/method/UpdateOpenIdConnection
    /// </summary>
    public static function UpdateOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates a existing Player Shared Secret Key. It may take up to 5 minutes for this update to become generally available
    /// after this API returns.
    /// https://api.playfab.com/Documentation/Admin/method/UpdatePlayerSharedSecret
    /// </summary>
    public static function UpdatePlayerSharedSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdatePlayerSharedSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates a player statistic configuration for the title, optionally allowing the developer to specify a reset interval.
    /// https://api.playfab.com/Documentation/Admin/method/UpdatePlayerStatisticDefinition
    /// </summary>
    public static function UpdatePlayerStatisticDefinition($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdatePlayerStatisticDefinition", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Changes a policy for a title
    /// https://api.playfab.com/Documentation/Admin/method/UpdatePolicy
    /// </summary>
    public static function UpdatePolicy($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdatePolicy", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the random drop table configuration for the title
    /// https://api.playfab.com/Documentation/Admin/method/UpdateRandomResultTables
    /// </summary>
    public static function UpdateRandomResultTables($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateRandomResultTables", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates an existing virtual item store with new or modified items
    /// https://api.playfab.com/Documentation/Admin/method/UpdateStoreItems
    /// </summary>
    public static function UpdateStoreItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateStoreItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Update an existing task.
    /// https://api.playfab.com/Documentation/Admin/method/UpdateTask
    /// </summary>
    public static function UpdateTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Admin/method/UpdateUserData
    /// </summary>
    public static function UpdateUserData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Admin/method/UpdateUserInternalData
    /// </summary>
    public static function UpdateUserInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Admin/method/UpdateUserPublisherData
    /// </summary>
    public static function UpdateUserPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Admin/method/UpdateUserPublisherInternalData
    /// </summary>
    public static function UpdateUserPublisherInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserPublisherInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/UpdateUserPublisherReadOnlyData
    /// </summary>
    public static function UpdateUserPublisherReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserPublisherReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Admin/method/UpdateUserReadOnlyData
    /// </summary>
    public static function UpdateUserReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title specific display name for a user
    /// https://api.playfab.com/Documentation/Admin/method/UpdateUserTitleDisplayName
    /// </summary>
    public static function UpdateUserTitleDisplayName($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserTitleDisplayName", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

}
?>
