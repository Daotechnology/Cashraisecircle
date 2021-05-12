const registerNewMember = async(body) =>{
    const request = await axios.post('Backend/control/register.php',body);
    return request;
}


export {registerNewMember}