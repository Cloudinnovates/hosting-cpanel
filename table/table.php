<?ob_start();?>
<link rel="stylesheet" type="text/css" href="css/table.css">
<div class="CSSTableGenerator" >
                <table >
                        <tr><td>
                    Account Snapshot
                        for <?echo $_SESSION['CurrentUser'];?>
                        </td></tr>
                    <tr>
                        <td >
                            Billing
                        </td>
                        <td class="link">
                            <a  href="http://www.fictionteam.com/f/hosting.html"><button class="cupid-green1">Click Here </button></a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                           Database
                        </td>
                        <td>
                            <?include('./pages/database.php');?>
                        </td>
                        
                    </tr>
                    <tr>
                        <td >
                            Bandwidth
                        </td>
                        <td>
                            <?include('./pages/bandwidth.php');?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            DiskSpace
                        </td>
                        <td>
                            <?include('./pages/diskspace.php');?>
                        </td>
                    </tr>
                    <tr class="logout"><td class="logout"><a  href="logout.php">Logout</a></td></tr>
                </table>
            </div>
            
