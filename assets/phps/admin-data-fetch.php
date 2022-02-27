<?php

//
// CONDITIONS TO CONTROL FLOW OF CONTROL
//

if ($_GET['func'] == 'loans')
pageOnLoad();
else if ($_GET['func'] == 'approve')
approvalDecline (1);
else if ($_GET['func'] == 'decline')
approvalDecline (0);
else if ($_GET['func'] == 'approve')
homeData();
else if ($_GET['func'] == 'enquiries')
enquiries();
else if ($_GET['func'] == 'enquiryAns')
answerEnquiry();
else if ($_GET['func'] == 'enquiryIgn')
ignoreEnquiry();

//
// FUNCIONS 
//

function pageOnLoad () {
    require 'db_login.php';
    // total-requests
    // pending-requests
    // loans-approved
    // loans-declined
    // total-users
    // total-contacts-info
    echo "<table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Occupation</th>
            <th>Loan</th>
            <th>Income</th>
            <th>Amount</th>
            <th>Contact No</th>
            <th>Approved</th>
            <th>Approve / Decline</th>
        </tr>";
    require 'db_login.php';

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) die($connection->connect_error);
    $query = "SELECT * FROM `loanApplications`;";
    $result = $connection->query($query);
    if (!$result)
    {
        die($connection->error);
    }
    $rows = $result->num_rows;

    for ($j = 0 ; $j < $rows ; ++$j)
    {
        $result->data_seek($j);
        $rowData = $result->fetch_array(MYSQLI_ASSOC);
        echo '<tr>';
        echo '    <td>' . $rowData['customerName'] . '</td>';
        echo '    <td>' . $rowData['email'] . '</td>';
        echo '    <td>' . $rowData['occupation'] . '</td>';
        echo '    <td>' . $rowData['loan'] . '</td>';
        echo '    <td>' . $rowData['income'] . '</td>';
        echo '    <td>' . $rowData['loanAmount'] . '</td>';
        echo '    <td>' . $rowData['phoneNo'] . '</td>';
        echo '    <td>' . $rowData['approval'] . '</td>';
        echo '    <td>
                <button type="button" class="approve-btn" onclick="approve(this)" value="' . $rowData['customerId'] . '">Approve</button>
                <button type="button" class="approve-btn" onclick="decline(this)" value="' . $rowData['customerId'] . '">Decline</button>
            </td>
        </tr>';
    }

    echo '</table>';
    $result->close();
    $connection->close();
}

function approvalDecline ($whatToDo) {
    require 'db_login.php';

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) die($connection->connect_error);
    $cid = $_GET['cid'];
    $query = "UPDATE `loanApplications` SET `approval` = '" . $whatToDo . "' WHERE (`customerId` = '" . $cid ."');";
    $result = $connection->query($query);
    if (!$result)
    {
        die($connection->error);
    }
    $connection->close();  

}

// function  () {
//     echo json_encode($id_numbers);
// }

function enquiries ()
{
    require 'db_login.php';
    // total-requests
    // pending-requests
    // loans-approved
    // loans-declined
    // total-users
    // total-contacts-info
    echo "<table id='enquiry'>
        <tr>
            <th>Enquiry Number</th>
            <th>Visitor Name</th>
            <th>Visitor's Email</th>
            <th>Visitor's Phone Number</th>
            <th>Enquiry Made</th>
            <th>Enquiry Date</th>
            <th>Enquiry Answered?</th>
            <th>Enquiry Answer Date</th>
            <th>Approve / Decline</th>
        </tr>";
    require 'db_login.php';

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) die($connection->connect_error);
    $query = "SELECT * FROM `visitorEnquiries`;";
    $result = $connection->query($query);
    if (!$result)
    {
        die($connection->error);
    }
    $rows = $result->num_rows;

    for ($j = 0 ; $j < $rows ; ++$j)
    {
        $result->data_seek($j);
        $rowData = $result->fetch_array(MYSQLI_ASSOC);
        echo '<tr>';
        echo '    <td>' . $rowData['enquiryId'] . '</td>';
        echo '    <td>' . $rowData['visitorName'] . '</td>';
        echo '    <td>' . $rowData['email'] . '</td>';
        echo '    <td>' . $rowData['phoneNo'] . '</td>';
        echo '    <td><div>' . $rowData['enquiry'] . '</div></td>';
        echo '    <td>' . $rowData['enquiryDate'] . '</td>';
        if ($rowData['enquiryAnswered'] == 0)
        {
            echo '    <td> No </td>';
        }
        else if ($rowData['enquiryAnswered'] == 1)
        {
            echo '    <td> Yes </td>';
        }
        else if ($rowData['enquiryAnswered'] == 2)
        {
            echo '    <td> Ignored </td>';
        }
        echo '    <td>' . $rowData['enquiryReplyDate'] . '</td>';
        echo '    <td>
                      <button type="button" class="enquiry-btn" onclick="enquiry(this)" value="' . $rowData['enquiryId'] . '">Reply</button>
                      <button type="button" class="enquiry-btn" onclick="ignore(this)" value="' . $rowData['enquiryId'] . '">Ignore</button>
                 </td>';
        echo '</tr>';
    }

    echo '</table>';
    $result->close();
    $connection->close();
}

function answerEnquiry()
{
    require 'db_login.php';

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) die($connection->connect_error);
    $eid = $_GET['eid'];
    $query = "UPDATE `visitorEnquiries` SET `enquiryAnswered` = '1', `enquiryReplyDate` = CURDATE() WHERE (`enquiryId` = '" . $eid ."');";
    $result = $connection->query($query);
    if (!$result)
    {
        die($connection->error);
    }
    $connection->close();  

    // $enq = $_GET['enq'];

}

function ignoreEnquiry()
{
    require 'db_login.php';

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) die($connection->connect_error);
    $eid = $_GET['eid'];
    $query = "UPDATE `visitorEnquiries` SET `enquiryAnswered` = '2' , `enquiryReplyDate` = CURDATE() WHERE (`enquiryId` = '" . $eid ."');";
    $result = $connection->query($query);
    if (!$result)
    {
        die($connection->error);
    }
    $connection->close();  

    // $enq = $_GET['enq'];

}

?>