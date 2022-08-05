<?php



/**
 * This class defines the structure of the 'gestion_adresses' table.
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
class CommonGestionAdressesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonGestionAdressesTableMap';

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
        $this->setName('gestion_adresses');
        $this->setPhpName('CommonGestionAdresses');
        $this->setClassname('CommonGestionAdresses');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 50, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, 0);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, 0);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', true, 250, '');
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres', 'AdresseDepotOffres', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers', 'AdresseRetraisDossiers', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis', 'LieuOuverturePlis', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_fr', 'AdresseDepotOffresFr', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_fr', 'AdresseRetraisDossiersFr', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_fr', 'LieuOuverturePlisFr', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_ar', 'AdresseDepotOffresAr', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_ar', 'AdresseRetraisDossiersAr', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_ar', 'LieuOuverturePlisAr', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_en', 'AdresseDepotOffresEn', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_es', 'AdresseDepotOffresEs', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_su', 'AdresseDepotOffresSu', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_du', 'AdresseDepotOffresDu', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_cz', 'AdresseDepotOffresCz', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_en', 'AdresseRetraisDossiersEn', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_es', 'AdresseRetraisDossiersEs', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_su', 'AdresseRetraisDossiersSu', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_du', 'AdresseRetraisDossiersDu', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_cz', 'AdresseRetraisDossiersCz', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_en', 'LieuOuverturePlisEn', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_es', 'LieuOuverturePlisEs', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_su', 'LieuOuverturePlisSu', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_du', 'LieuOuverturePlisDu', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_cz', 'LieuOuverturePlisCz', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_depot_offres_it', 'AdresseDepotOffresIt', 'VARCHAR', true, 250, '');
        $this->addColumn('adresse_retrais_dossiers_it', 'AdresseRetraisDossiersIt', 'VARCHAR', true, 250, '');
        $this->addColumn('lieu_ouverture_plis_it', 'LieuOuverturePlisIt', 'VARCHAR', true, 250, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonGestionAdressesTableMap
