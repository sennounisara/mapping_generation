<?php



/**
 * This class defines the structure of the 'demande' table.
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
class DemandeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.DemandeTableMap';

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
        $this->setName('demande');
        $this->setPhpName('Demande');
        $this->setClassname('Demande');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('ID_COMMUNE', 'IdCommune', 'INTEGER', false, null, null);
        $this->addColumn('ID_SERVICE', 'IdService', 'INTEGER', false, null, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', false, null, null);
        $this->addColumn('NUMERO_DEMANDE', 'NumeroDemande', 'VARCHAR', false, 255, null);
        $this->addColumn('DETAIL_DEMANDE', 'DetailDemande', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STATUT_DEMANDE', 'StatutDemande', 'INTEGER', false, 30, null);
        $this->addColumn('LATITUDE_DEMANDE', 'LatitudeDemande', 'VARCHAR', false, 255, null);
        $this->addColumn('LONGITUDE_DEMANDE', 'LongitudeDemande', 'VARCHAR', false, 255, null);
        $this->addColumn('ADRESSE_DEMANDE', 'AdresseDemande', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_PIECE_JOINTE_DEMANDE', 'IdPieceJointeDemande', 'INTEGER', false, null, null);
        $this->addColumn('NOM_PIECE_JOINTE_DEMANDE', 'NomPieceJointeDemande', 'VARCHAR', false, 255, null);
        $this->addColumn('REVISION', 'Revision', 'INTEGER', false, null, 0);
        $this->addColumn('CONTENU_PIECE_JOINTE', 'ContenuPieceJointe', 'LONGVARCHAR', false, null, null);
        $this->addColumn('NOM_CITOYEN', 'NomCitoyen', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_CITOYEN', 'PrenomCitoyen', 'VARCHAR', false, 255, null);
        $this->addColumn('EMAIL_CITOYEN', 'EmailCitoyen', 'VARCHAR', false, 255, null);
        $this->addColumn('TEL_CITOYEN', 'TelCitoyen', 'VARCHAR', false, 255, null);
        $this->addColumn('TELEPHONE_PORTABLE', 'TelephonePortable', 'VARCHAR', false, 255, null);
        $this->addColumn('ADRESSE_CITOYEN_1', 'AdresseCitoyen1', 'VARCHAR', false, 255, null);
        $this->addColumn('ADRESSE_CITOYEN_2', 'AdresseCitoyen2', 'VARCHAR', false, 255, null);
        $this->addColumn('CODE_POSTAL_CITOYEN', 'CodePostalCitoyen', 'VARCHAR', false, 255, null);
        $this->addColumn('LOCALITE_CITOYEN', 'LocaliteCitoyen', 'VARCHAR', false, 255, null);
        $this->addColumn('IDENTIFIANT_APP_MOBILE_CITOYEN', 'IdentifiantAppMobileCitoyen', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE_DEVICE', 'TypeDevice', 'CHAR', false, null, null);
        $this->getColumn('TYPE_DEVICE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_DEPOT_DEMANDE', 'DateDepotDemande', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_TRAITEMENT_DEMANDE', 'DateTraitementDemande', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_CLOTURE_DEMANDE', 'DateClotureDemande', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_REOUVERTURE_DEMANDE', 'DateReouvertureDemande', 'TIMESTAMP', false, null, null);
        $this->addColumn('DUREE_AVANT_TRAITEMENT', 'DureeAvantTraitement', 'BIGINT', false, null, null);
        $this->addColumn('DUREE_TRAITEMENT', 'DureeTraitement', 'BIGINT', false, null, null);
        $this->addColumn('MOTIF_REOUVERTIR', 'MotifReouvertir', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CLOTURER_PAR', 'CloturerPar', 'CHAR', false, null, '0');
        $this->getColumn('CLOTURER_PAR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('PAYS', 'Pays', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_FR', 'NomAgentFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_AR', 'NomAgentAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_THEME_CITOYEN', 'IdThemeCitoyen', 'INTEGER', false, null, null);
        $this->addColumn('ID_THEME_EN_COURS', 'IdThemeEnCours', 'INTEGER', false, null, null);
        $this->addColumn('DATE_REPONSE', 'DateReponse', 'DATE', false, null, null);
        $this->addColumn('DATE_STATUT', 'DateStatut', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_REGION_AFFECTATION', 'IdRegionAffectation', 'INTEGER', false, null, null);
        $this->addColumn('ID_PROVINCE_AFFECTATION', 'IdProvinceAffectation', 'INTEGER', false, null, null);
        $this->addColumn('ID_COMMUNE_AFFECTATION', 'IdCommuneAffectation', 'INTEGER', false, null, null);
        $this->addColumn('ORGANISATION', 'Organisation', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ORIGINE', 'IdOrigine', 'INTEGER', false, 8, null);
        $this->addColumn('ID_AGENT_CREATEUR', 'IdAgentCreateur', 'INTEGER', false, 8, null);
        $this->addColumn('ID_ENTITE_CREATRICE', 'IdEntiteCreatrice', 'INTEGER', false, 8, null);
        $this->addColumn('SUPPRIME', 'Supprime', 'CHAR', false, null, '0');
        $this->getColumn('SUPPRIME', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SOURCE', 'Source', 'INTEGER', false, 8, null);
        $this->addColumn('DETAIL_SOURCE', 'DetailSource', 'VARCHAR', false, 255, null);
        $this->addColumn('FORMAT', 'Format', 'INTEGER', false, 8, null);
        $this->addColumn('REFERENCE_INTERNE', 'ReferenceInterne', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_REGION', 'IdRegion', 'INTEGER', false, 8, null);
        $this->addColumn('ID_PROVINCE', 'IdProvince', 'INTEGER', false, 8, null);
        $this->addColumn('ID_PAYS', 'IdPays', 'INTEGER', false, null, null);
        $this->addColumn('DATE_CREATION_DEMANDE', 'DateCreationDemande', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_ENTITE_CONCERNEE', 'IdEntiteConcernee', 'INTEGER', false, null, null);
        $this->addColumn('NOM_ENTITE_CONCERNEE_FR', 'NomEntiteConcerneeFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_ENTITE_CONCERNEE_AR', 'NomEntiteConcerneeAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ENTITE_CONCERNEE_CITOYEN', 'IdEntiteConcerneeCitoyen', 'INTEGER', false, null, null);
        $this->addColumn('NOM_ENTITE_CONCERNEE_CITOYEN_FR', 'NomEntiteConcerneeCitoyenFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_ENTITE_CONCERNEE_CITOYEN_AR', 'NomEntiteConcerneeCitoyenAr', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE_REQUERANT', 'TypeRequerant', 'INTEGER', false, null, null);
        $this->addColumn('CANAL_DEPOT', 'CanalDepot', 'CHAR', true, null, '0');
        $this->addColumn('ID_EXTERNE', 'IdExterne', 'INTEGER', false, null, null);
        $this->addColumn('DATE_ENVOI_REPONSE', 'DateEnvoiReponse', 'TIMESTAMP', false, null, null);
        $this->addColumn('ETAT_ENVOI_REPONSE', 'EtatEnvoiReponse', 'CHAR', false, null, '0');
        $this->getColumn('ETAT_ENVOI_REPONSE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '-1',
  3 => '2',
));
        $this->addColumn('ETAT_ENVOI', 'EtatEnvoi', 'CHAR', false, null, '0');
        $this->getColumn('ETAT_ENVOI', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_ENVOI', 'DateEnvoi', 'TIMESTAMP', false, null, null);
        $this->addColumn('NUMERO_EXTERNE', 'NumeroExterne', 'VARCHAR', false, 10, null);
        $this->addColumn('OBJET_DEMANDE', 'ObjetDemande', 'LONGVARCHAR', false, null, null);
        $this->addColumn('TAG_INTERFACE', 'TagInterface', 'VARCHAR', false, 10, '0');
        $this->addColumn('CHAMP_SUPP_1', 'ChampSupp1', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_2', 'ChampSupp2', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_3', 'ChampSupp3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_4', 'ChampSupp4', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_5', 'ChampSupp5', 'LONGVARCHAR', false, null, null);
        $this->addColumn('TYPE_DEMANDE', 'TypeDemande', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_DESTINATAIRE', 'IdAgentDestinataire', 'INTEGER', false, null, null);
        $this->addColumn('NOM_AGENT_DESTINATAIRE_FR', 'NomAgentDestinataireFr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_DESTINATAIRE_FR', 'PrenomAgentDestinataireFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_DESTINATAIRE_AR', 'NomAgentDestinataireAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_DESTINATAIRE_AR', 'PrenomAgentDestinataireAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_AGENT_SIGNATAIRE', 'IdAgentSignataire', 'INTEGER', false, null, null);
        $this->addColumn('NOM_AGENT_SIGNATAIRE_FR', 'NomAgentSignataireFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_SIGNATAIRE_AR', 'NomAgentSignataireAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_SIGNATAIRE_AR', 'PrenomAgentSignataireAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_SIGNATAIRE_FR', 'PrenomAgentSignataireFr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_AGENT_EMETTEUR', 'IdAgentEmetteur', 'INTEGER', false, null, null);
        $this->addColumn('NOM_AGENT_EMETTEUR_FR', 'NomAgentEmetteurFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_EMETTEUR_AR', 'NomAgentEmetteurAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_EMETTEUR_AR', 'PrenomAgentEmetteurAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_EMETTEUR_FR', 'PrenomAgentEmetteurFr', 'VARCHAR', false, 255, null);
        $this->addColumn('REPONSE_OBLIGATOIRE', 'ReponseObligatoire', 'CHAR', false, null, null);
        $this->getColumn('REPONSE_OBLIGATOIRE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('CODE_DEMANDE', 'CodeDemande', 'INTEGER', false, 255, null);
        $this->addColumn('CODE_PROVISOIRE', 'CodeProvisoire', 'INTEGER', false, null, null);
        $this->addColumn('TAG_GATEWAY', 'TagGateway', 'CHAR', true, null, '0');
        $this->getColumn('TAG_GATEWAY', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_UTILISATEUR_GATEWAY', 'IdUtilisateurGateway', 'VARCHAR', false, 255, null);
        $this->addColumn('CHAMP_SUPP_THEME_1', 'ChampSuppTheme1', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_THEME_2', 'ChampSuppTheme2', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_THEME_3', 'ChampSuppTheme3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_THEME_4', 'ChampSuppTheme4', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_THEME_5', 'ChampSuppTheme5', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_TYPE_THEME', 'IdTypeTheme', 'INTEGER', false, 2, null);
        $this->addColumn('ID_ETAPE_EN_COURS', 'IdEtapeEnCours', 'INTEGER', false, null, null);
        $this->addColumn('NUMERO_ETAPE_ENCOURS', 'NumeroEtapeEncours', 'INTEGER', false, null, null);
        $this->addColumn('NOMBRE_ETAPES', 'NombreEtapes', 'INTEGER', false, null, null);
        $this->addColumn('DERNIER_MESSAGE', 'DernierMessage', 'LONGVARCHAR', false, null, null);
        $this->addColumn('LIBELLE_ETAPE_ENCOURS', 'LibelleEtapeEncours', 'VARCHAR', false, 500, null);
        $this->addColumn('DERNIER_ACTEUR', 'DernierActeur', 'VARCHAR', false, 500, null);
        $this->addColumn('DATE_REPONSE_ETAPE', 'DateReponseEtape', 'DATE', false, null, null);
        $this->addColumn('ID_ENTITE_RELANCE', 'IdEntiteRelance', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_RELANCE', 'IdAgentRelance', 'INTEGER', false, null, null);
        $this->addColumn('IMPORTANT', 'Important', 'CHAR', true, null, '0');
        $this->getColumn('IMPORTANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_ECHEANCE_REPONSE_PROCHE', 'DateEcheanceReponseProche', 'TIMESTAMP', false, null, null);
        $this->addColumn('URL_EXTERNE', 'UrlExterne', 'VARCHAR', false, 255, null);
        $this->addColumn('CLOTURE_AUTOMATIQUE', 'ClotureAutomatique', 'CHAR', false, null, '0');
        $this->getColumn('CLOTURE_AUTOMATIQUE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DELAI_TRAITEMENT_OUVRABLE', 'DelaiTraitementOuvrable', 'SMALLINT', false, 5, null);
        $this->addColumn('ACTEUR_EXTERNE', 'ActeurExterne', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DELAI_TRAITEMENT', 'DelaiTraitement', 'SMALLINT', false, 5, null);
        $this->addColumn('OBJET_MODIFIE', 'ObjetModifie', 'VARCHAR', false, 255, null);
        $this->addColumn('CONFIDENTIEL', 'Confidentiel', 'CHAR', false, null, '0');
        $this->getColumn('CONFIDENTIEL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DELAI_COMPLEMENT', 'DelaiComplement', 'INTEGER', true, null, 0);
        $this->addColumn('ERREURS_DETECTES', 'ErreursDetectes', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_DEMANDE_ORIGINE', 'IdDemandeOrigine', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('THistoriqueConsultation', 'THistoriqueConsultation', RelationMap::ONE_TO_MANY, array('ID' => 'ID_DEMANDE', ), null, null, 'THistoriqueConsultations');
    } // buildRelations()

} // DemandeTableMap
