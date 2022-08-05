<?php



/**
 * This class defines the structure of the 'Justificatifs' table.
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
class CommonJustificatifsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonJustificatifsTableMap';

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
        $this->setName('Justificatifs');
        $this->setPhpName('CommonJustificatifs');
        $this->setClassname('CommonJustificatifs');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('intitule_justificatif', 'IntituleJustificatif', 'VARCHAR', true, 255, '');
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, 0);
        $this->addColumn('taille', 'Taille', 'VARCHAR', true, 80, '');
        $this->addColumn('justificatif', 'Justificatif', 'INTEGER', true, null, null);
        $this->addColumn('statut', 'Statut', 'CHAR', true, null, '0');
        $this->getColumn('statut', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_document', 'IdDocument', 'INTEGER', false, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', false, 100, null);
        $this->addColumn('nom_fr', 'NomFr', 'VARCHAR', false, 100, '');
        $this->addColumn('nom_en', 'NomEn', 'VARCHAR', false, 100, '');
        $this->addColumn('nom_es', 'NomEs', 'VARCHAR', false, 100, '');
        $this->addColumn('nom_su', 'NomSu', 'VARCHAR', false, 100, '');
        $this->addColumn('nom_du', 'NomDu', 'VARCHAR', false, 100, '');
        $this->addColumn('nom_cz', 'NomCz', 'VARCHAR', false, 100, '');
        $this->addColumn('nom_ar', 'NomAr', 'VARCHAR', false, 100, '');
        $this->addColumn('nom_it', 'NomIt', 'VARCHAR', false, 100, '');
        $this->addColumn('date_fin_validite', 'DateFinValidite', 'DATE', true, null, '0000-00-00');
        $this->addColumn('visible_par_agents', 'VisibleParAgents', 'CHAR', false, null, '0');
        $this->getColumn('visible_par_agents', false)->setValueSet(array (
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

} // CommonJustificatifsTableMap
