<?php



/**
 * This class defines the structure of the 'detail_admissibilite' table.
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
class CommonDetailAdmissibiliteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDetailAdmissibiliteTableMap';

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
        $this->setName('detail_admissibilite');
        $this->setPhpName('CommonDetailAdmissibilite');
        $this->setClassname('CommonDetailAdmissibilite');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', true, null, null);
        $this->addColumn('id_env', 'IdEnv', 'INTEGER', true, null, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 100, null);
        $this->addColumn('admissibilite', 'Admissibilite', 'CHAR', true, 2, null);
        $this->addColumn('reserve', 'Reserve', 'CHAR', true, null, '0');
        $this->getColumn('reserve', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_seance', 'IdSeance', 'INTEGER', true, null, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('type_offre', 'TypeOffre', 'CHAR', false, null, null);
        $this->getColumn('type_offre', false)->setValueSet(array (
  0 => 'e',
  1 => 'p',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDetailAdmissibiliteTableMap
