<?php
include 'PlayFabHttp.php';

class PlayFabDataApi
{
    /// <summary>
    /// Abort pending file uploads to an entity's profile.
    /// https://api.playfab.com/Documentation/Data/method/AbortFileUploads
    /// </summary>
    public static function AbortFileUploads($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/AbortFileUploads", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Delete files on an entity's profile.
    /// https://api.playfab.com/Documentation/Data/method/DeleteFiles
    /// </summary>
    public static function DeleteFiles($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/DeleteFiles", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Finalize file uploads to an entity's profile.
    /// https://api.playfab.com/Documentation/Data/method/FinalizeFileUploads
    /// </summary>
    public static function FinalizeFileUploads($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/FinalizeFileUploads", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves file metadata from an entity's profile.
    /// https://api.playfab.com/Documentation/Data/method/GetFiles
    /// </summary>
    public static function GetFiles($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/GetFiles", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves objects from an entity's profile.
    /// https://api.playfab.com/Documentation/Data/method/GetObjects
    /// </summary>
    public static function GetObjects($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Object/GetObjects", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Initiates file uploads to an entity's profile.
    /// https://api.playfab.com/Documentation/Data/method/InitiateFileUploads
    /// </summary>
    public static function InitiateFileUploads($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/InitiateFileUploads", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets objects on an entity's profile.
    /// https://api.playfab.com/Documentation/Data/method/SetObjects
    /// </summary>
    public static function SetObjects($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Object/SetObjects", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
