<?php



/**
 * This class defines the structure of the 't_groupe_diffusion' table.
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
class TGroupeDiffusionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TGroupeDiffusionTableMap';

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
        $this->setName('t_groupe_diffusion');
        $this->setPhpName('TGroupeDiffusion');
        $this->setClassname('TGroupeDiffusion');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_GROUPE', 'IdGroupe', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_FR', 'LibelleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('LIBELLE_AR', 'LibelleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TGroupeDiffusionTableMap
