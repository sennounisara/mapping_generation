<?php



/**
 * This class defines the structure of the 'Groupe_Moniteur' table.
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
class CommonGroupeMoniteurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonGroupeMoniteurTableMap';

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
        $this->setName('Groupe_Moniteur');
        $this->setPhpName('CommonGroupeMoniteur');
        $this->setClassname('CommonGroupeMoniteur');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, 0);
        $this->addColumn('Identifiant', 'Identifiant', 'VARCHAR', true, 50, '');
        $this->addColumn('Mdp', 'Mdp', 'VARCHAR', true, 50, '');
        $this->addColumn('Num_Abonnement', 'NumAbonnement', 'VARCHAR', false, 50, null);
        $this->addColumn('Num_Abonne', 'NumAbonne', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonGroupeMoniteurTableMap
