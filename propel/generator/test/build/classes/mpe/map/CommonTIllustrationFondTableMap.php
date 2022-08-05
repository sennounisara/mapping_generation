<?php



/**
 * This class defines the structure of the 'T_Illustration_Fond' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonTIllustrationFondTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTIllustrationFondTableMap';

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
        $this->setName('T_Illustration_Fond');
        $this->setPhpName('CommonTIllustrationFond');
        $this->setClassname('CommonTIllustrationFond');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_illustration_fond', 'IdIllustrationFond', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('actif', 'Actif', 'CHAR', true, null, '0');
        $this->getColumn('actif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('nom_image', 'NomImage', 'VARCHAR', false, 255, null);
        $this->addColumn('id_blob_image', 'IdBlobImage', 'VARCHAR', false, 50, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTIllustrationFondTableMap
