<?php



/**
 * This class defines the structure of the 'Prestation' table.
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
class CommonPrestationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonPrestationTableMap';

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
        $this->setName('Prestation');
        $this->setPhpName('CommonPrestation');
        $this->setClassname('CommonPrestation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('num_marche', 'NumMarche', 'VARCHAR', false, 255, null);
        $this->addColumn('type_procedure', 'TypeProcedure', 'INTEGER', false, null, null);
        $this->addColumn('objet', 'Objet', 'CLOB', false, null, null);
        $this->addColumn('montant', 'Montant', 'VARCHAR', false, 255, null);
        $this->addColumn('maitre_ouvrage', 'MaitreOuvrage', 'VARCHAR', false, 255, null);
        $this->addColumn('date_debut_execution', 'DateDebutExecution', 'VARCHAR', false, 20, null);
        $this->addColumn('date_fin_execution', 'DateFinExecution', 'VARCHAR', false, 20, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonPrestationTableMap
