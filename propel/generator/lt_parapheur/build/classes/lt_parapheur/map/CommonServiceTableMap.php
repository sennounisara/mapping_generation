<?php



/**
 * This class defines the structure of the 'Service' table.
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
class CommonServiceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonServiceTableMap';

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
        $this->setName('Service');
        $this->setPhpName('CommonService');
        $this->setClassname('CommonService');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('type_service', 'TypeService', 'CHAR', true, null, '2');
        $this->getColumn('type_service', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('libelle', 'Libelle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('sigle', 'Sigle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite', 'AdresseSuite', 'VARCHAR', true, 100, '');
        $this->addColumn('cp', 'Cp', 'VARCHAR', true, 5, '');
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 100, '');
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', true, 100, '');
        $this->addColumn('fax', 'Fax', 'VARCHAR', true, 100, '');
        $this->addColumn('mail', 'Mail', 'VARCHAR', true, 100, '');
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 150, null);
        $this->addColumn('id_initial', 'IdInitial', 'INTEGER', true, null, 0);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 20, null);
        $this->addColumn('siren', 'Siren', 'VARCHAR', false, 20, null);
        $this->addColumn('complement', 'Complement', 'VARCHAR', false, 5, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_ar', 'AdresseAr', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_ar', 'AdresseSuiteAr', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_ar', 'VilleAr', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_ar', 'PaysAr', 'VARCHAR', true, 150, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_fr', 'AdresseFr', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_fr', 'AdresseSuiteFr', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_fr', 'VilleFr', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_fr', 'PaysFr', 'VARCHAR', true, 150, null);
        $this->addColumn('libelle_es', 'LibelleEs', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_es', 'AdresseEs', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_es', 'AdresseSuiteEs', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_es', 'VilleEs', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_es', 'PaysEs', 'VARCHAR', true, 150, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_en', 'AdresseEn', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_en', 'AdresseSuiteEn', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_en', 'VilleEn', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_en', 'PaysEn', 'VARCHAR', true, 150, null);
        $this->addColumn('libelle_su', 'LibelleSu', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_su', 'AdresseSu', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_su', 'AdresseSuiteSu', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_su', 'VilleSu', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_su', 'PaysSu', 'VARCHAR', true, 150, null);
        $this->addColumn('libelle_du', 'LibelleDu', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_du', 'AdresseDu', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_du', 'AdresseSuiteDu', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_du', 'VilleDu', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_du', 'PaysDu', 'VARCHAR', true, 150, null);
        $this->addColumn('libelle_cz', 'LibelleCz', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_cz', 'AdresseCz', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_cz', 'AdresseSuiteCz', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_cz', 'VilleCz', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_cz', 'PaysCz', 'VARCHAR', true, 150, '');
        $this->addColumn('libelle_it', 'LibelleIt', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_it', 'AdresseIt', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse_suite_it', 'AdresseSuiteIt', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_it', 'VilleIt', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_it', 'PaysIt', 'VARCHAR', true, 150, null);
        $this->addColumn('chemin_complet', 'CheminComplet', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_fr', 'CheminCompletFr', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_en', 'CheminCompletEn', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_es', 'CheminCompletEs', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_su', 'CheminCompletSu', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_du', 'CheminCompletDu', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_cz', 'CheminCompletCz', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_ar', 'CheminCompletAr', 'VARCHAR', true, 255, '');
        $this->addColumn('chemin_complet_it', 'CheminCompletIt', 'VARCHAR', true, 255, '');
        $this->addColumn('nom_service_archiveur', 'NomServiceArchiveur', 'VARCHAR', false, 100, null);
        $this->addColumn('identifiant_service_archiveur', 'IdentifiantServiceArchiveur', 'VARCHAR', false, 100, null);
        $this->addColumn('affichage_service', 'AffichageService', 'CHAR', true, null, '1');
        $this->getColumn('affichage_service', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('activation_fuseau_horaire', 'ActivationFuseauHoraire', 'CHAR', true, null, '0');
        $this->getColumn('activation_fuseau_horaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decalage_horaire', 'DecalageHoraire', 'VARCHAR', false, 5, null);
        $this->addColumn('lieu_residence', 'LieuResidence', 'VARCHAR', false, 255, null);
        $this->addColumn('alerte', 'Alerte', 'CHAR', true, null, '0');
        $this->getColumn('alerte', false)->setValueSet(array (
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

} // CommonServiceTableMap
