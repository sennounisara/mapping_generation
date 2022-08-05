<?php


/**
 * Base class that represents a query for the 'facture_piece_jointe' table.
 *
 * 
 *
 * @method CommonFacturePieceJointeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonFacturePieceJointeQuery orderByIdFacture($order = Criteria::ASC) Order by the id_facture column
 * @method CommonFacturePieceJointeQuery orderByIdBlobPieceJointe($order = Criteria::ASC) Order by the id_blob_piece_jointe column
 * @method CommonFacturePieceJointeQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonFacturePieceJointeQuery orderByIdPieceSousType($order = Criteria::ASC) Order by the id_piece_sous_type column
 * @method CommonFacturePieceJointeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonFacturePieceJointeQuery orderByIdBlobPieceSigne($order = Criteria::ASC) Order by the id_blob_piece_signe column
 *
 * @method CommonFacturePieceJointeQuery groupById() Group by the id column
 * @method CommonFacturePieceJointeQuery groupByIdFacture() Group by the id_facture column
 * @method CommonFacturePieceJointeQuery groupByIdBlobPieceJointe() Group by the id_blob_piece_jointe column
 * @method CommonFacturePieceJointeQuery groupByNom() Group by the nom column
 * @method CommonFacturePieceJointeQuery groupByIdPieceSousType() Group by the id_piece_sous_type column
 * @method CommonFacturePieceJointeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonFacturePieceJointeQuery groupByIdBlobPieceSigne() Group by the id_blob_piece_signe column
 *
 * @method CommonFacturePieceJointeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFacturePieceJointeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFacturePieceJointeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFacturePieceJointeQuery leftJoinCommonFacturePieceJointeRelatedByIdFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonFacturePieceJointeRelatedByIdFacture relation
 * @method CommonFacturePieceJointeQuery rightJoinCommonFacturePieceJointeRelatedByIdFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonFacturePieceJointeRelatedByIdFacture relation
 * @method CommonFacturePieceJointeQuery innerJoinCommonFacturePieceJointeRelatedByIdFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonFacturePieceJointeRelatedByIdFacture relation
 *
 * @method CommonFacturePieceJointeQuery leftJoinCommonPieceSousTypeFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonPieceSousTypeFacture relation
 * @method CommonFacturePieceJointeQuery rightJoinCommonPieceSousTypeFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonPieceSousTypeFacture relation
 * @method CommonFacturePieceJointeQuery innerJoinCommonPieceSousTypeFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonPieceSousTypeFacture relation
 *
 * @method CommonFacturePieceJointeQuery leftJoinCommonFacturePieceJointeRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonFacturePieceJointeRelatedById relation
 * @method CommonFacturePieceJointeQuery rightJoinCommonFacturePieceJointeRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonFacturePieceJointeRelatedById relation
 * @method CommonFacturePieceJointeQuery innerJoinCommonFacturePieceJointeRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonFacturePieceJointeRelatedById relation
 *
 * @method CommonFacturePieceJointe findOne(PropelPDO $con = null) Return the first CommonFacturePieceJointe matching the query
 * @method CommonFacturePieceJointe findOneOrCreate(PropelPDO $con = null) Return the first CommonFacturePieceJointe matching the query, or a new CommonFacturePieceJointe object populated from the query conditions when no match is found
 *
 * @method CommonFacturePieceJointe findOneByIdFacture(int $id_facture) Return the first CommonFacturePieceJointe filtered by the id_facture column
 * @method CommonFacturePieceJointe findOneByIdBlobPieceJointe(int $id_blob_piece_jointe) Return the first CommonFacturePieceJointe filtered by the id_blob_piece_jointe column
 * @method CommonFacturePieceJointe findOneByNom(string $nom) Return the first CommonFacturePieceJointe filtered by the nom column
 * @method CommonFacturePieceJointe findOneByIdPieceSousType(int $id_piece_sous_type) Return the first CommonFacturePieceJointe filtered by the id_piece_sous_type column
 * @method CommonFacturePieceJointe findOneByNomFichier(string $nom_fichier) Return the first CommonFacturePieceJointe filtered by the nom_fichier column
 * @method CommonFacturePieceJointe findOneByIdBlobPieceSigne(int $id_blob_piece_signe) Return the first CommonFacturePieceJointe filtered by the id_blob_piece_signe column
 *
 * @method array findById(int $id) Return CommonFacturePieceJointe objects filtered by the id column
 * @method array findByIdFacture(int $id_facture) Return CommonFacturePieceJointe objects filtered by the id_facture column
 * @method array findByIdBlobPieceJointe(int $id_blob_piece_jointe) Return CommonFacturePieceJointe objects filtered by the id_blob_piece_jointe column
 * @method array findByNom(string $nom) Return CommonFacturePieceJointe objects filtered by the nom column
 * @method array findByIdPieceSousType(int $id_piece_sous_type) Return CommonFacturePieceJointe objects filtered by the id_piece_sous_type column
 * @method array findByNomFichier(string $nom_fichier) Return CommonFacturePieceJointe objects filtered by the nom_fichier column
 * @method array findByIdBlobPieceSigne(int $id_blob_piece_signe) Return CommonFacturePieceJointe objects filtered by the id_blob_piece_signe column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonFacturePieceJointeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFacturePieceJointeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFacturePieceJointe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFacturePieceJointeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFacturePieceJointeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFacturePieceJointeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFacturePieceJointeQuery) {
            return $criteria;
        }
        $query = new CommonFacturePieceJointeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonFacturePieceJointe|CommonFacturePieceJointe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFacturePieceJointePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonFacturePieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonFacturePieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_facture`, `id_blob_piece_jointe`, `nom`, `id_piece_sous_type`, `nom_fichier`, `id_blob_piece_signe` FROM `facture_piece_jointe` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonFacturePieceJointe();
            $obj->hydrate($row);
            CommonFacturePieceJointePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonFacturePieceJointe|CommonFacturePieceJointe[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonFacturePieceJointe[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonFacturePieceJointePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonFacturePieceJointePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePieceJointePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFacture(1234); // WHERE id_facture = 1234
     * $query->filterByIdFacture(array(12, 34)); // WHERE id_facture IN (12, 34)
     * $query->filterByIdFacture(array('min' => 12)); // WHERE id_facture >= 12
     * $query->filterByIdFacture(array('max' => 12)); // WHERE id_facture <= 12
     * </code>
     *
     * @see       filterByCommonFacturePieceJointeRelatedByIdFacture()
     *
     * @param     mixed $idFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdFacture($idFacture = null, $comparison = null)
    {
        if (is_array($idFacture)) {
            $useMinMax = false;
            if (isset($idFacture['min'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_FACTURE, $idFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFacture['max'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_FACTURE, $idFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePieceJointePeer::ID_FACTURE, $idFacture, $comparison);
    }

    /**
     * Filter the query on the id_blob_piece_jointe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobPieceJointe(1234); // WHERE id_blob_piece_jointe = 1234
     * $query->filterByIdBlobPieceJointe(array(12, 34)); // WHERE id_blob_piece_jointe IN (12, 34)
     * $query->filterByIdBlobPieceJointe(array('min' => 12)); // WHERE id_blob_piece_jointe >= 12
     * $query->filterByIdBlobPieceJointe(array('max' => 12)); // WHERE id_blob_piece_jointe <= 12
     * </code>
     *
     * @param     mixed $idBlobPieceJointe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdBlobPieceJointe($idBlobPieceJointe = null, $comparison = null)
    {
        if (is_array($idBlobPieceJointe)) {
            $useMinMax = false;
            if (isset($idBlobPieceJointe['min'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_BLOB_PIECE_JOINTE, $idBlobPieceJointe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobPieceJointe['max'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_BLOB_PIECE_JOINTE, $idBlobPieceJointe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePieceJointePeer::ID_BLOB_PIECE_JOINTE, $idBlobPieceJointe, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePieceJointePeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the id_piece_sous_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPieceSousType(1234); // WHERE id_piece_sous_type = 1234
     * $query->filterByIdPieceSousType(array(12, 34)); // WHERE id_piece_sous_type IN (12, 34)
     * $query->filterByIdPieceSousType(array('min' => 12)); // WHERE id_piece_sous_type >= 12
     * $query->filterByIdPieceSousType(array('max' => 12)); // WHERE id_piece_sous_type <= 12
     * </code>
     *
     * @see       filterByCommonPieceSousTypeFacture()
     *
     * @param     mixed $idPieceSousType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdPieceSousType($idPieceSousType = null, $comparison = null)
    {
        if (is_array($idPieceSousType)) {
            $useMinMax = false;
            if (isset($idPieceSousType['min'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_PIECE_SOUS_TYPE, $idPieceSousType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceSousType['max'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_PIECE_SOUS_TYPE, $idPieceSousType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePieceJointePeer::ID_PIECE_SOUS_TYPE, $idPieceSousType, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePieceJointePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the id_blob_piece_signe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobPieceSigne(1234); // WHERE id_blob_piece_signe = 1234
     * $query->filterByIdBlobPieceSigne(array(12, 34)); // WHERE id_blob_piece_signe IN (12, 34)
     * $query->filterByIdBlobPieceSigne(array('min' => 12)); // WHERE id_blob_piece_signe >= 12
     * $query->filterByIdBlobPieceSigne(array('max' => 12)); // WHERE id_blob_piece_signe <= 12
     * </code>
     *
     * @param     mixed $idBlobPieceSigne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdBlobPieceSigne($idBlobPieceSigne = null, $comparison = null)
    {
        if (is_array($idBlobPieceSigne)) {
            $useMinMax = false;
            if (isset($idBlobPieceSigne['min'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_BLOB_PIECE_SIGNE, $idBlobPieceSigne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobPieceSigne['max'])) {
                $this->addUsingAlias(CommonFacturePieceJointePeer::ID_BLOB_PIECE_SIGNE, $idBlobPieceSigne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePieceJointePeer::ID_BLOB_PIECE_SIGNE, $idBlobPieceSigne, $comparison);
    }

    /**
     * Filter the query by a related CommonFacturePieceJointe object
     *
     * @param   CommonFacturePieceJointe|PropelObjectCollection $commonFacturePieceJointe The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonFacturePieceJointeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonFacturePieceJointeRelatedByIdFacture($commonFacturePieceJointe, $comparison = null)
    {
        if ($commonFacturePieceJointe instanceof CommonFacturePieceJointe) {
            return $this
                ->addUsingAlias(CommonFacturePieceJointePeer::ID_FACTURE, $commonFacturePieceJointe->getId(), $comparison);
        } elseif ($commonFacturePieceJointe instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonFacturePieceJointePeer::ID_FACTURE, $commonFacturePieceJointe->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonFacturePieceJointeRelatedByIdFacture() only accepts arguments of type CommonFacturePieceJointe or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonFacturePieceJointeRelatedByIdFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function joinCommonFacturePieceJointeRelatedByIdFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonFacturePieceJointeRelatedByIdFacture');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonFacturePieceJointeRelatedByIdFacture');
        }

        return $this;
    }

    /**
     * Use the CommonFacturePieceJointeRelatedByIdFacture relation CommonFacturePieceJointe object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonFacturePieceJointeQuery A secondary query class using the current class as primary query
     */
    public function useCommonFacturePieceJointeRelatedByIdFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonFacturePieceJointeRelatedByIdFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonFacturePieceJointeRelatedByIdFacture', 'CommonFacturePieceJointeQuery');
    }

    /**
     * Filter the query by a related CommonPieceSousTypeFacture object
     *
     * @param   CommonPieceSousTypeFacture|PropelObjectCollection $commonPieceSousTypeFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonFacturePieceJointeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonPieceSousTypeFacture($commonPieceSousTypeFacture, $comparison = null)
    {
        if ($commonPieceSousTypeFacture instanceof CommonPieceSousTypeFacture) {
            return $this
                ->addUsingAlias(CommonFacturePieceJointePeer::ID_PIECE_SOUS_TYPE, $commonPieceSousTypeFacture->getId(), $comparison);
        } elseif ($commonPieceSousTypeFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonFacturePieceJointePeer::ID_PIECE_SOUS_TYPE, $commonPieceSousTypeFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonPieceSousTypeFacture() only accepts arguments of type CommonPieceSousTypeFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonPieceSousTypeFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function joinCommonPieceSousTypeFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonPieceSousTypeFacture');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonPieceSousTypeFacture');
        }

        return $this;
    }

    /**
     * Use the CommonPieceSousTypeFacture relation CommonPieceSousTypeFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonPieceSousTypeFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonPieceSousTypeFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonPieceSousTypeFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonPieceSousTypeFacture', 'CommonPieceSousTypeFactureQuery');
    }

    /**
     * Filter the query by a related CommonFacturePieceJointe object
     *
     * @param   CommonFacturePieceJointe|PropelObjectCollection $commonFacturePieceJointe  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonFacturePieceJointeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonFacturePieceJointeRelatedById($commonFacturePieceJointe, $comparison = null)
    {
        if ($commonFacturePieceJointe instanceof CommonFacturePieceJointe) {
            return $this
                ->addUsingAlias(CommonFacturePieceJointePeer::ID, $commonFacturePieceJointe->getIdFacture(), $comparison);
        } elseif ($commonFacturePieceJointe instanceof PropelObjectCollection) {
            return $this
                ->useCommonFacturePieceJointeRelatedByIdQuery()
                ->filterByPrimaryKeys($commonFacturePieceJointe->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonFacturePieceJointeRelatedById() only accepts arguments of type CommonFacturePieceJointe or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonFacturePieceJointeRelatedById relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function joinCommonFacturePieceJointeRelatedById($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonFacturePieceJointeRelatedById');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonFacturePieceJointeRelatedById');
        }

        return $this;
    }

    /**
     * Use the CommonFacturePieceJointeRelatedById relation CommonFacturePieceJointe object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonFacturePieceJointeQuery A secondary query class using the current class as primary query
     */
    public function useCommonFacturePieceJointeRelatedByIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonFacturePieceJointeRelatedById($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonFacturePieceJointeRelatedById', 'CommonFacturePieceJointeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFacturePieceJointe $commonFacturePieceJointe Object to remove from the list of results
     *
     * @return CommonFacturePieceJointeQuery The current query, for fluid interface
     */
    public function prune($commonFacturePieceJointe = null)
    {
        if ($commonFacturePieceJointe) {
            $this->addUsingAlias(CommonFacturePieceJointePeer::ID, $commonFacturePieceJointe->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
