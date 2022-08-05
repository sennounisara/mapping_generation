<?php



/**
 * This class defines the structure of the 'configuration_organsime' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class ConfigurationOrgansimeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ConfigurationOrgansimeTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('configuration_organsime');
        $this->setPhpName('ConfigurationOrgansime');
        $this->setClassname('ConfigurationOrgansime');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('niveau_lieu', 'NiveauLieu', 'INTEGER', true, 2, 0);
        $this->addColumn('valeur_defaut_pays', 'ValeurDefautPays', 'INTEGER', false, null, 0);
        $this->addColumn('valeur_defaut_region', 'ValeurDefautRegion', 'INTEGER', false, null, 0);
        $this->addColumn('valeur_defaut_province', 'ValeurDefautProvince', 'INTEGER', false, null, 0);
        $this->addColumn('valeur_par_defaut_commune', 'ValeurParDefautCommune', 'INTEGER', false, null, null);
        $this->addColumn('mode_affectation_demande', 'ModeAffectationDemande', 'CHAR', true, null, '1');
        $this->getColumn('mode_affectation_demande', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
));
        $this->addColumn('module_entite_lie_lieu', 'ModuleEntiteLieLieu', 'CHAR', false, null, '0');
        $this->getColumn('module_entite_lie_lieu', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('NBR_JOUR_DELAI_TRAITEMENT', 'NbrJourDelaiTraitement', 'INTEGER', true, 2, 0);
        $this->addColumn('OBLIGATION_LIEU_DEMANDE', 'ObligationLieuDemande', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_LIEU_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MODULE_GOOGLE_MAPS', 'ModuleGoogleMaps', 'CHAR', true, null, '1');
        $this->getColumn('MODULE_GOOGLE_MAPS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBILITE_CHAMP_LOCALISATION', 'VisibiliteChampLocalisation', 'CHAR', true, null, '0');
        $this->getColumn('VISIBILITE_CHAMP_LOCALISATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ECHANGE_WEB_SERVICE', 'EchangeWebService', 'CHAR', true, null, '0');
        $this->getColumn('ECHANGE_WEB_SERVICE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', true, null, 1);
        $this->addColumn('OBLIGATION_NOM_PRENOM_REQUERANT', 'ObligationNomPrenomRequerant', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_NOM_PRENOM_REQUERANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_NOM_ORGANISME_REQUERANT', 'ObligationNomOrganismeRequerant', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_NOM_ORGANISME_REQUERANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_REGISTRE_COMMERCE_REQUERANT', 'ObligationRegistreCommerceRequerant', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_REGISTRE_COMMERCE_REQUERANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_TELEPHONE_REQUERANT', 'ObligationTelephoneRequerant', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_TELEPHONE_REQUERANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBILITE_REGISTRE_COMMERCE_REQUERANT', 'VisibiliteRegistreCommerceRequerant', 'CHAR', true, null, '0');
        $this->getColumn('VISIBILITE_REGISTRE_COMMERCE_REQUERANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBILITE_IDENTIFIANT_FISCAL', 'VisibiliteIdentifiantFiscal', 'CHAR', true, null, '0');
        $this->getColumn('VISIBILITE_IDENTIFIANT_FISCAL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_IDENTIFIANT_FISCAL', 'ObligationIdentifiantFiscal', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_IDENTIFIANT_FISCAL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DELAI_CLOTURE_DEMANDE', 'DelaiClotureDemande', 'INTEGER', false, null, 7);
        $this->addColumn('NOTIFICATION_AVANT_DATE_REPONSE', 'NotificationAvantDateReponse', 'INTEGER', false, null, 7);
        $this->addColumn('BORNE_TRAITEMENT_DEMANDE', 'BorneTraitementDemande', 'INTEGER', false, null, 7);
        $this->addColumn('REGLE_NUMERO_DEMANDE_ENTRANT', 'RegleNumeroDemandeEntrant', 'VARCHAR', true, 255, '{ALEA}');
        $this->addColumn('REGLE_NUMERO_DEMANDE_SORTANT', 'RegleNumeroDemandeSortant', 'VARCHAR', true, 255, '{ALEA}');
        $this->addColumn('REGLE_NUMERO_DEMANDE_INTERNE', 'RegleNumeroDemandeInterne', 'VARCHAR', true, 255, '{ALEA}');
        $this->addColumn('VISIBILITE_BLOC_REPONSE_OBLIGATOIRE', 'VisibiliteBlocReponseObligatoire', 'CHAR', true, null, '0');
        $this->getColumn('VISIBILITE_BLOC_REPONSE_OBLIGATOIRE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBILITE_BLOC_LIEU_CONCERNE', 'VisibiliteBlocLieuConcerne', 'CHAR', true, null, '0');
        $this->getColumn('VISIBILITE_BLOC_LIEU_CONCERNE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_MESSAGE_DEMANDE', 'ObligationMessageDemande', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_MESSAGE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_EMAIL_DEMANDEUR', 'ObligationEmailDemandeur', 'CHAR', true, null, '1');
        $this->getColumn('OBLIGATION_EMAIL_DEMANDEUR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_SOUS_THEME', 'ObligationSousTheme', 'CHAR', true, null, '1');
        $this->getColumn('OBLIGATION_SOUS_THEME', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLITIE_CONDITION_UTILISATION', 'VisiblitieConditionUtilisation', 'CHAR', false, null, '0');
        $this->getColumn('VISIBLITIE_CONDITION_UTILISATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('CONDITION_UTILISATION_AR', 'ConditionUtilisationAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CONDITION_UTILISATION_FR', 'ConditionUtilisationFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('GESTION_DEMANDEUR_PAR_ENTITE', 'GestionDemandeurParEntite', 'CHAR', false, null, '0');
        $this->getColumn('GESTION_DEMANDEUR_PAR_ENTITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VALEUR_DEFAUT_TYPE_DEMANDE', 'ValeurDefautTypeDemande', 'INTEGER', true, null, 0);
        $this->addColumn('VALEUR_DEFAUT_REPONSE_OBLIGATOIRE', 'ValeurDefautReponseObligatoire', 'CHAR', true, null, '1');
        $this->getColumn('VALEUR_DEFAUT_REPONSE_OBLIGATOIRE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACCES_EXTRANET', 'AccesExtranet', 'CHAR', true, null, '0');
        $this->getColumn('ACCES_EXTRANET', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('LANGUE_PAR_DEFAUT_EXTRANET', 'LangueParDefautExtranet', 'CHAR', true, null, 'ar');
        $this->getColumn('LANGUE_PAR_DEFAUT_EXTRANET', false)->setValueSet(array (
  0 => 'fr',
  1 => 'ar',
));
        $this->addColumn('GOOGLE_ANALYTICS', 'GoogleAnalytics', 'VARCHAR', false, 1000, null);
        $this->addColumn('CHIFFREMENT', 'Chiffrement', 'CHAR', true, null, '0');
        $this->getColumn('CHIFFREMENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_ENTITE_CENTRALE', 'IdEntiteCentrale', 'INTEGER', false, null, null);
        $this->addColumn('SERVICE_NOTIFICATION_SMS', 'ServiceNotificationSms', 'CHAR', true, null, '0');
        $this->getColumn('SERVICE_NOTIFICATION_SMS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('LOGIN_SERVICE_SMS', 'LoginServiceSms', 'VARCHAR', false, 255, null);
        $this->addColumn('PASS_SERVICE_SMS', 'PassServiceSms', 'VARCHAR', false, 255, null);
        $this->addColumn('CODE_ENVOI_SMS', 'CodeEnvoiSms', 'VARCHAR', false, 255, null);
        $this->addColumn('URL_SERVICE_SMS', 'UrlServiceSms', 'VARCHAR', false, 255, null);
        $this->addColumn('CIRCUIT_VALIDATION', 'CircuitValidation', 'CHAR', true, null, null);
        $this->getColumn('CIRCUIT_VALIDATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBILITE_MESSAGE_DEMANDE', 'VisibiliteMessageDemande', 'CHAR', true, null, '1');
        $this->getColumn('VISIBILITE_MESSAGE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('CODE_SIGNATAIRE_CERTIFICAT', 'CodeSignataireCertificat', 'VARCHAR', false, 50, 'CN');
        $this->addColumn('ACCES_STATISTIQUES', 'AccesStatistiques', 'CHAR', true, null, '0');
        $this->getColumn('ACCES_STATISTIQUES', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('WEBSERVICE_DEMANDE', 'WebserviceDemande', 'CHAR', true, null, '0');
        $this->getColumn('WEBSERVICE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('URL_WEBSERVICE_DEMANDE', 'UrlWebserviceDemande', 'LONGVARCHAR', false, null, null);
        $this->addColumn('JETON_WEBSERVICE', 'JetonWebservice', 'LONGVARCHAR', false, null, null);
        $this->addColumn('IDENTIFIANT_ENTITE_RECEPTION', 'IdentifiantEntiteReception', 'INTEGER', false, null, null);
        $this->addColumn('IDENTIFIANT_SOUS_THEME', 'IdentifiantSousTheme', 'INTEGER', false, null, null);
        $this->addColumn('SCANNER', 'Scanner', 'CHAR', true, null, '0');
        $this->getColumn('SCANNER', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTIVATION_AUTH_SOCLE', 'ActivationAuthSocle', 'CHAR', true, null, '0');
        $this->getColumn('ACTIVATION_AUTH_SOCLE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFICHAGE_ENREGISTRER_GENERER_NUMERO', 'AffichageEnregistrerGenererNumero', 'CHAR', true, null, '0');
        $this->getColumn('AFFICHAGE_ENREGISTRER_GENERER_NUMERO', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('JETON_ORG_SERVICE', 'JetonOrgService', 'VARCHAR', false, 255, null);
        $this->addColumn('ONGLET_DEPUIS_1', 'OngletDepuis1', 'INTEGER', false, null, null);
        $this->addColumn('ONGLET_DEPUIS_2', 'OngletDepuis2', 'INTEGER', false, null, null);
        $this->addColumn('NOMBRE_REOUVERTURE', 'NombreReouverture', 'INTEGER', true, 2, 3);
        $this->addColumn('CENTRE_APPEL', 'CentreAppel', 'CHAR', false, null, '0');
        $this->getColumn('CENTRE_APPEL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('URL_WS_CA', 'UrlWsCa', 'VARCHAR', false, 255, null);
        $this->addColumn('AUTHENTIFICATION_LDAP', 'AuthentificationLdap', 'CHAR', false, null, '0');
        $this->getColumn('AUTHENTIFICATION_LDAP', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('IP_LDAP', 'IpLdap', 'VARCHAR', false, 50, null);
        $this->addColumn('BASE_DN_LDAP', 'BaseDnLdap', 'VARCHAR', false, 100, null);
        $this->addColumn('USER_LDAP', 'UserLdap', 'VARCHAR', false, 100, null);
        $this->addColumn('PASSWORD_LDAP', 'PasswordLdap', 'VARCHAR', false, 100, null);
        $this->addColumn('SCHEMA_LDAP', 'SchemaLdap', 'VARCHAR', false, 255, null);
        $this->addColumn('PORT_LDAP', 'PortLdap', 'INTEGER', false, 6, null);
        $this->addColumn('PROLONGATION', 'Prolongation', 'CHAR', true, null, '0');
        $this->getColumn('PROLONGATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DUREE_PROLONGATION', 'DureeProlongation', 'INTEGER', false, null, null);
        $this->addColumn('ORGANISME_PARAMETRAGE', 'OrganismeParametrage', 'INTEGER', false, null, null);
        $this->addColumn('ORGANISME_GESTION_UTILISATEURS', 'OrganismeGestionUtilisateurs', 'INTEGER', false, null, null);
        $this->addColumn('TYPE_GESTION_UTILISATEUR', 'TypeGestionUtilisateur', 'CHAR', true, null, '1');
        $this->getColumn('TYPE_GESTION_UTILISATEUR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MULTI_AFFECTATION', 'MultiAffectation', 'CHAR', true, null, '0');
        $this->getColumn('MULTI_AFFECTATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TAUX_ECHEANCE', 'TauxEcheance', 'FLOAT', true, null, 0.7);
        $this->addColumn('REPONSE_AFFECTATION_EXTERNE', 'ReponseAffectationExterne', 'CHAR', true, null, '1');
        $this->getColumn('REPONSE_AFFECTATION_EXTERNE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('INCREMENT_CONFIDENTIEL', 'IncrementConfidentiel', 'CHAR', false, null, '0');
        $this->getColumn('INCREMENT_CONFIDENTIEL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_EMETTEUR_COURRIER_ENTRANT', 'ObligationEmetteurCourrierEntrant', 'CHAR', true, null, '1');
        $this->getColumn('OBLIGATION_EMETTEUR_COURRIER_ENTRANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_EMETTEUR_COURRIER_INTERNE', 'ObligationEmetteurCourrierInterne', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_EMETTEUR_COURRIER_INTERNE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_DESTINATAIRE_COURRIER_SORTANT', 'ObligationDestinataireCourrierSortant', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_DESTINATAIRE_COURRIER_SORTANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT', 'ObligationDestinataireMentionneCourrierEntrant', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_DESTINATAIRE_COURRIER_INTERNE', 'ObligationDestinataireCourrierInterne', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_DESTINATAIRE_COURRIER_INTERNE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_OBJET', 'ObligationObjet', 'CHAR', true, null, '1');
        $this->getColumn('OBLIGATION_OBJET', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('OBLIGATION_SIGNATAIRE', 'ObligationSignataire', 'CHAR', true, null, '0');
        $this->getColumn('OBLIGATION_SIGNATAIRE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('GESTION_DEMANDEURS', 'GestionDemandeurs', 'CHAR', true, null, '0');
        $this->getColumn('GESTION_DEMANDEURS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('NUMERO_FOURNISSEUR', 'NumeroFournisseur', 'CHAR', true, null, '0');
        $this->getColumn('NUMERO_FOURNISSEUR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TYPE_DELAI', 'TypeDelai', 'CHAR', true, null, '1');
        $this->getColumn('TYPE_DELAI', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('NUM_PROVISOIRE', 'NumProvisoire', 'CHAR', true, null, '0');
        $this->getColumn('NUM_PROVISOIRE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ConfigurationOrgansimeTableMap
