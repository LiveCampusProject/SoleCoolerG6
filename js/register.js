/*
*   Fonction permettant de vérifier si deux mot de passe sont identique.
*   Attention cela ne remplace pas la vérification coté serveur cela permet juste d'éviter de recharger la page si les mdp ne sont pas identique 
*/

function validatePassword(){

    const password = document.querySelector('input[name=password]');
    const confirm = document.querySelector('input[name=confirm]');
    
    if (confirm.value === password.value) {
      confirm.setCustomValidity('');
    } else {
      confirm.setCustomValidity('Passwords do not match');
    }
}