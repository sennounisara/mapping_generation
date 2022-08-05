<?php



/**
 * This class defines the structure of the 'T_Profil_Joue' table.
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
class CommonTProfilJoueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTProfilJoueTableMap';

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
        $this->setName('T_Profil_Joue');
        $this->setPhpName('CommonTProfilJoue');
        $this->setClassname('CommonTProfilJoue');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 10, null);
        $this->addColumn('nom_officiel', 'NomOfficiel', 'VARCHAR', true, 255, null);
        $this->addColumn('pays', 'Pays', 'VARCHAR', true, 50, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 50, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 50, null);
        $this->addColumn('code_postal', 'CodePostal', 'VARCHAR', false, 50, null);
        $this->addColumn('point_contact', 'PointContact', 'VARCHAR', true, 255, null);
        $this->addColumn('a_attention_de', 'AAttentionDe', 'VARCHAR', true, 50, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 50, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 50, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 50, null);
        $this->addColumn('adresse_pouvoir_adjudicateur', 'AdressePouvoirAdjudicateur', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_profil_acheteur', 'AdresseProfilAcheteur', 'VARCHAR', false, 255, null);
        $this->addColumn('autorite_nationale', 'AutoriteNationale', 'INTEGER', false, 2, null);
        $this->addColumn('office_nationale', 'OfficeNationale', 'INTEGER', false, 2, null);
        $this->addColumn('collectivite_territoriale', 'CollectiviteTerritoriale', 'INTEGER', false, 2, null);
        $this->addColumn('office_regionale', 'OfficeRegionale', 'INTEGER', false, 2, null);
        $this->addColumn('organisme_public', 'OrganismePublic', 'INTEGER', false, 2, null);
        $this->addColumn('organisation_europenne', 'OrganisationEuropenne', 'INTEGER', false, 2, null);
        $this->addColumn('autre_type_pouvoir_adjudicateur', 'AutreTypePouvoirAdjudicateur', 'INTEGER', false, 2, null);
        $this->addColumn('autre_libelle_type_pouvoir_adjudicateur', 'AutreLibelleTypePouvoirAdjudicateur', 'VARCHAR', false, 50, null);
        $this->addColumn('services_generaux', 'ServicesGeneraux', 'INTEGER', false, 2, null);
        $this->addColumn('defense', 'Defense', 'INTEGER', false, 2, null);
        $this->addColumn('securite_public', 'SecuritePublic', 'INTEGER', false, 2, null);
        $this->addColumn('environnement', 'Environnement', 'INTEGER', false, 2, null);
        $this->addColumn('affaires_economiques', 'AffairesEconomiques', 'INTEGER', false, 2, null);
        $this->addColumn('sante', 'Sante', 'INTEGER', false, 2, null);
        $this->addColumn('developpement_collectif', 'DeveloppementCollectif', 'INTEGER', false, 2, null);
        $this->addColumn('protection_sociale', 'ProtectionSociale', 'INTEGER', false, 2, null);
        $this->addColumn('loisirs', 'Loisirs', 'INTEGER', false, 2, null);
        $this->addColumn('eduction', 'Eduction', 'INTEGER', false, 2, null);
        $this->addColumn('autre_activites_principales', 'AutreActivitesPrincipales', 'INTEGER', false, 2, null);
        $this->addColumn('autre_libelle_activites_principales', 'AutreLibelleActivitesPrincipales', 'VARCHAR', false, 50, null);
        $this->addColumn('pouvoir_adjudicateur_agit', 'PouvoirAdjudicateurAgit', 'INTEGER', false, 2, null);
        $this->addColumn('pouvoir_adjudicateur_marche_couvert', 'PouvoirAdjudicateurMarcheCouvert', 'INTEGER', false, 2, null);
        $this->addColumn('entite_adjudicatrice_marche_couvert', 'EntiteAdjudicatriceMarcheCouvert', 'INTEGER', true, 2, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTProfilJoueTableMap
