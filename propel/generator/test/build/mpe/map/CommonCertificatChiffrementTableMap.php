<?php



/**
 * This class defines the structure of the 'CertificatChiffrement' table.
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
class CommonCertificatChiffrementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCertificatChiffrementTableMap';

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
        $this->setName('CertificatChiffrement');
        $this->setPhpName('CommonCertificatChiffrement');
        $this->setClassname('CommonCertificatChiffrement');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('type_env', 'TypeEnv', 'INTEGER', true, 1, 0);
        $this->addPrimaryKey('sous_pli', 'SousPli', 'INTEGER', true, 3, 0);
        $this->addPrimaryKey('index_certificat', 'IndexCertificat', 'INTEGER', true, 3, 1);
        $this->addColumn('certificat', 'Certificat', 'LONGVARCHAR', true, null, null);
        $this->addColumn('visible', 'Visible', 'CHAR', true, null, '1');
        $this->getColumn('visible', false)->setValueSet(array (
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

} // CommonCertificatChiffrementTableMap
