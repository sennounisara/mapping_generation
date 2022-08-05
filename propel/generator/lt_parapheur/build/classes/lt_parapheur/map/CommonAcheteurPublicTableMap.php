<?php



/**
 * This class defines the structure of the 'AcheteurPublic' table.
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
class CommonAcheteurPublicTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAcheteurPublicTableMap';

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
        $this->setName('AcheteurPublic');
        $this->setPhpName('CommonAcheteurPublic');
        $this->setClassname('CommonAcheteurPublic');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('denomination', 'Denomination', 'VARCHAR', true, 100, '');
        $this->addColumn('prm', 'Prm', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 100, '');
        $this->addColumn('cp', 'Cp', 'VARCHAR', true, 5, '');
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 100, '');
        $this->addColumn('dept', 'Dept', 'CHAR', true, 3, '');
        $this->addColumn('type_org', 'TypeOrg', 'CHAR', true, null, '');
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', true, 100, '');
        $this->addColumn('fax', 'Fax', 'VARCHAR', true, 100, '');
        $this->addColumn('mail', 'Mail', 'VARCHAR', true, 100, '');
        $this->addColumn('url', 'Url', 'VARCHAR', true, 100, '');
        $this->addColumn('url_acheteur', 'UrlAcheteur', 'VARCHAR', false, 100, null);
        $this->addColumn('facture_numero', 'FactureNumero', 'VARCHAR', true, 100, '');
        $this->addColumn('facture_code', 'FactureCode', 'VARCHAR', true, 100, '');
        $this->addColumn('facture_denomination', 'FactureDenomination', 'VARCHAR', true, 100, '');
        $this->addColumn('facturation_service', 'FacturationService', 'VARCHAR', false, 100, null);
        $this->addColumn('facture_adresse', 'FactureAdresse', 'VARCHAR', true, 255, '');
        $this->addColumn('facture_cp', 'FactureCp', 'VARCHAR', true, 10, '');
        $this->addColumn('facture_ville', 'FactureVille', 'VARCHAR', true, 100, '');
        $this->addColumn('facture_pays', 'FacturePays', 'VARCHAR', true, 100, '');
        $this->addColumn('id_aapc', 'IdAapc', 'INTEGER', true, 22, 0);
        $this->addColumn('boamp_login', 'BoampLogin', 'VARCHAR', true, 100, '');
        $this->addColumn('boamp_password', 'BoampPassword', 'VARCHAR', true, 100, '');
        $this->addColumn('boamp_mail', 'BoampMail', 'VARCHAR', true, 100, '');
        $this->addColumn('boamp_target', 'BoampTarget', 'CHAR', true, null, '0');
        $this->addColumn('default_form_values', 'DefaultFormValues', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_am_boamp', 'DefautFormAmBoamp', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_am_boamp_joue', 'DefautFormAmBoampJoue', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_mapa_boamp', 'DefautFormMapaBoamp', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_aconcours', 'DefautFormAconcours', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_as_boamp_joue', 'DefautFormAsBoampJoue', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_aa_boamp', 'DefautFormAaBoamp', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_ar_mapa_boamp', 'DefautFormArMapaBoamp', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_05_boamp', 'DefautForm05Boamp', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_rect', 'DefautFormRect', 'CLOB', true, null, null);
        $this->addColumn('defaut_form_aa_boamp_joue', 'DefautFormAaBoampJoue', 'CLOB', true, null, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, 0);
        $this->addColumn('livraison_service', 'LivraisonService', 'VARCHAR', false, 100, null);
        $this->addColumn('livraison_adresse', 'LivraisonAdresse', 'VARCHAR', false, 100, null);
        $this->addColumn('livraison_code_postal', 'LivraisonCodePostal', 'VARCHAR', false, 5, null);
        $this->addColumn('livraison_ville', 'LivraisonVille', 'VARCHAR', false, 100, null);
        $this->addColumn('livraison_pays', 'LivraisonPays', 'VARCHAR', false, 100, null);
        $this->addColumn('type_pouvoir_activite', 'TypePouvoirActivite', 'LONGVARCHAR', false, null, null);
        $this->addColumn('code_nuts', 'CodeNuts', 'LONGVARCHAR', false, null, null);
        $this->addColumn('modalites_financement', 'ModalitesFinancement', 'LONGVARCHAR', false, null, null);
        $this->addColumn('moniteur_provenance', 'MoniteurProvenance', 'INTEGER', true, null, 90);
        $this->addColumn('code_acces_logiciel', 'CodeAccesLogiciel', 'VARCHAR', true, 255, 'Y8YG-69WD-4421-4G28');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAcheteurPublicTableMap
